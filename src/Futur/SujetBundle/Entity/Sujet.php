<?php

namespace Futur\SujetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Sujet
 * @ORM\Table(name="sujet")
 * @ORM\Entity(repositoryClass="Futur\SujetBundle\Entity\SujetRepository")
 */
class Sujet
{
     /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="url", type="string", length=255)
   */
  private $url;

  /**
   * @ORM\Column(name="alt", type="string", length=255)
   */
  private $alt;

  /**
   * @Assert\File(maxSize="6000000")
   */
  private $file;

  private $tempFilename;

  /**
   * @ORM\PrePersist()
   * @ORM\PreUpdate()
   */
  public function preUpload()
  {
    if (null === $this->file) {
      return;
    }
    $this->url = $this->file->guessExtension();
    $this->alt = $this->file->getClientOriginalName();
  }

  /**
   * @ORM\PreRemove()
   */
  public function preRemoveUpload()
  {
    $this->tempFilename = $this->getUploadRootDir().'/'.$this->id.'.'.$this->url;
  }

  /**
   * @ORM\PostRemove()
   */
  public function removeUpload()
  {
    if (file_exists($this->tempFilename))
    {
      unlink($this->tempFilename);
    }
  }

  public function upload()
  {
    // Si jamais il n'y a pas de fichier (champ facultatif)
    if (null === $this->file) {
      return;
    }

    // On garde le nom original du fichier de l'internaute
    $name = $this->file->getClientOriginalName();

    // On déplace le fichier envoyé dans le répertoire de notre choix
    $this->file->move($this->getUploadRootDir(), $name);

    // On sauvegarde le nom de fichier dans notre attribut $url
    $this->url = $name;

    // On crée également le futur attribut alt de notre balise <img>
    $this->alt = $name;
  }

  public function getUploadDir()
  {
    // On retourne le chemin relatif vers l'image pour un navigateur
    return 'uploads/img';
  }

  protected function getUploadRootDir()
  {
    // On retourne le chemin relatif vers l'image pour notre code PHP
    return __DIR__.'/../../../../web/'.$this->getUploadDir();
  }

  public function getWebPath()
  {
    return $this->getUploadDir().'/'.$this->getUrl();
  }


  /**
   * @return integer
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param string $url
   * @return Image
   */
  public function setUrl($url)
  {
    $this->url = $url;
    return $this;
  }

  /**
   * @return string
   */
  public function getUrl()
  {
    return $this->url;
  }

  /**
   * @param string $alt
   * @return Image
   */
  public function setAlt($alt)
  {
    $this->alt = $alt;
    return $this;
  }

  /**
   * @return string
   */
  public function getAlt()
  {
    return $this->alt;
  }

  public function setFile($file)
  {
    $this->file = $file;

    // On vérifie si on avait déjà un fichier pour cette entité
    if (null !== $this->url)
    {
      $this->tempFilename = $this->url;
      $this->url = null;
      $this->alt = null;
    }
  }

  public function getFile()
  {
    return $this->file;
  }
}
