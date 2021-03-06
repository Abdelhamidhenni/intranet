<?php

namespace Futur\CoursBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table()
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Futur\CoursBundle\Entity\CoursRepository")
 */
class Cours
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @ORM\ManyToOne(targetEntity="Futur\SujetBundle\Entity\Activite", inversedBy="Courss", cascade={"persist", "merge"})
     */
    private $activite;

    /**
    * @Assert\File
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
   * @ORM\PostPersist()
   * @ORM\PostUpdate()
   */
  public function upload()
  {
    if (null === $this->file) {
      return;
    }

    if (null !== $this->tempFilename) {
      $oldFile = $this->getUploadRootDir().'/'.$this->id.'.'.$this->tempFilename;
      if (file_exists($oldFile)) {
        unlink($oldFile);
      }
    }

    $this->file->move(
      $this->getUploadRootDir(),
      $this->id.'.'.$this->url
    );
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

  public function getUploadDir()
  {
    return 'uploads/img';
  }

  protected function getUploadRootDir()
  {
    return __DIR__.'/../../../../web/'.$this->getUploadDir();
  }

  public function getWebPath()
  {
    return $this->getUploadDir().'/'.$this->getId().'.'.$this->getUrl();
  }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Cours
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $url
     * @return Cours
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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function setFile($file)
  {
    $this->file = $file;

    // On vérifie si on avait déjà un fichier pour cette entité
    if (null !== $this->url) {
      // On sauvegarde l'extension du fichier pour le supprimer plus tard
      $this->tempFilename = $this->url;

      // On réinitialise les valeurs des attributs url et alt
      $this->url = null;
      $this->alt = null;
    }
  }

  public function getFile()
  {
    return $this->file;
  }

    /**
     * Set Activite
     *
     * @param \Futur\SujetBundle\Entity\Activite $activite
     * @return Cours
     */
    public function setActivite(\Futur\SujetBundle\Entity\Activite $activite = null)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get Activite
     *
     * @return \Futur\SujetBundle\Entity\Activite
     */
    public function getActivite()
    {
        return $this->activite;
    }
}
