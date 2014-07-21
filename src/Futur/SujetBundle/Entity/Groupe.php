<?php

namespace Futur\SujetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Futur\SujetBundle\Entity\GroupeRepository")
 */
class Groupe
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
     * @var integer
     *
     * @ORM\Column(name="taille", type="smallint", nullable=true)
     */
    private $taille;

    /**
     * @ORM\ManyToMany(targetEntity="Futur\UserBundle\Entity\User", cascade={"remove"})
     */
    private $membres;

    /**
     * @ORM\OneToMany(targetEntity="Futur\UserBundle\Entity\Correcteur", mappedBy="groupe", cascade={"remove"})
     */
    private $correcteurs;

    /**
     * @ORM\OneToOne(targetEntity="Futur\SujetBundle\Entity\Activite")
     */
    private $activite;

    /**
     * @ORM\OneToOne(targetEntity="Futur\NoteBundle\Entity\Note", cascade={"remove"})
     */
    private $note;

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
     * @return Groupe
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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

    /**
     * Set taille
     *
     * @param integer $taille
     * @return Groupe
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return integer
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set note
     *
     * @param integer $note
     * @return Groupe
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->membres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add membres
     *
     * @param \Futur\UserBundle\Entity\User $membres
     * @return Groupe
     */
    public function addMembre(\Futur\UserBundle\Entity\User $membres)
    {
        $this->membres[] = $membres;

        return $this;
    }

    /**
     * Remove membres
     *
     * @param \Futur\UserBundle\Entity\User $membres
     */
    public function removeMembre(\Futur\UserBundle\Entity\User $membres)
    {
        $this->membres->removeElement($membres);
    }

    /**
     * Get membres
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMembres()
    {
        return $this->membres;
    }

    /**
     * Set activite
     *
     * @param \Futur\SujetBundle\Entity\Activite $activite
     * @return Groupe
     */
    public function setActivite(\Futur\SujetBundle\Entity\Activite $activite = null)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return \Futur\SujetBundle\Entity\Activite
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Add correcteurs
     *
     * @param \Futur\UserBundle\Entity\User $correcteurs
     * @return Groupe
     */
    public function addCorrecteur(\Futur\UserBundle\Entity\User $correcteurs)
    {
        $this->correcteurs[] = $correcteurs;

        return $this;
    }

    /**
     * Remove correcteurs
     *
     * @param \Futur\UserBundle\Entity\User $correcteurs
     */
    public function removeCorrecteur(\Futur\UserBundle\Entity\User $correcteurs)
    {
        $this->correcteurs->removeElement($correcteurs);
    }

    /**
     * Get correcteurs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCorrecteurs()
    {
        return $this->correcteurs;
    }
}
