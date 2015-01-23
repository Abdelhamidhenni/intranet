<?php

namespace Futur\SujetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Futur\CoursBundle\Entity\Cours;
use Futur\UserBundle\Entity\Groupe;
use Futur\SujetBundle\Entity\Activite;

/**
 * Activite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Futur\SujetBundle\Entity\ActiviteRepository")
 */
class Activite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateliminsc", type="datetime")
     */
    private $dateliminsc;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxinscrit", type="integer")
     */
    private $maxinscrit;

    /**
     * @var integer
     *
     * @ORM\Column(name="done", type="integer")
     */
    private $done = 0;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="datetime")
     */
    private $datedebut;

    /**
     * @ORM\OneToOne(targetEntity="Futur\SujetBundle\Entity\Sujet", cascade={"persist", "remove"})
     */
    private $sujet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="datetime")
     */
    private $datefin;

    /**
     * @var integer
     *
     * @ORM\Column(name="mingroupesize", type="integer")
     */
    private $mingroupesize;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxgroupesize", type="integer")
     */
    private $maxgroupesize;

    /**
     * @ORM\ManyToOne(targetEntity="Futur\ModuleBundle\Entity\Module", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    public $module;

    /**
     * @var integer
     *
     * @ORM\Column(name="groupesize", type="integer")
     */
    private $groupesize;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity="Futur\CoursBundle\Entity\Cours", mappedBy="activite", cascade={"remove"})
     */
    public $cours;

    /**
     * @ORM\ManyToMany(targetEntity="Futur\UserBundle\Entity\User", cascade={"remove"})
     */
    public $inscrits;

    /**
     * @ORM\OneToMany(targetEntity="Futur\SujetBundle\Entity\Groupe", mappedBy="activite", cascade={"remove"})
     */
    public $groupes;

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
     * @return Activite
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
     * Set description
     *
     * @param string $description
     * @return Activite
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set maxinscrit
     *
     * @param integer $maxinscrit
     * @return Activite
     */
    public function setMaxinscrit($maxinscrit)
    {
        $this->maxinscrit = $maxinscrit;

        return $this;
    }

    /**
     * Get maxinscrit
     *
     * @return integer
     */
    public function getMaxinscrit()
    {
        return $this->maxinscrit;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     * @return Activite
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return Activite
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set mingroupesize
     *
     * @param integer $mingroupesize
     * @return Activite
     */
    public function setMingroupesize($mingroupesize)
    {
        $this->mingroupesize = $mingroupesize;

        return $this;
    }

    /**
     * Get mingroupesize
     *
     * @return integer
     */
    public function getMingroupesize()
    {
        return $this->mingroupesize;
    }

    /**
     * Set maxgroupesize
     *
     * @param integer $maxgroupesize
     * @return Activite
     */
    public function setMaxgroupesize($maxgroupesize)
    {
        $this->maxgroupesize = $maxgroupesize;

        return $this;
    }

    /**
     * Get maxgroupesize
     *
     * @return integer
     */
    public function getMaxgroupesize()
    {
        return $this->maxgroupesize;
    }

    /**
     * Set groupesize
     *
     * @param integer $groupesize
     * @return Activite
     */
    public function setGroupesize($groupesize)
    {
        $this->groupesize = $groupesize;

        return $this;
    }

    /**
     * Get groupesize
     *
     * @return integer
     */
    public function getGroupesize()
    {
        return $this->groupesize;
    }

    /**
     * Set inscriptiontype
     *
     * @param boolean $inscriptiontype
     * @return Activite
     */
    public function setInscriptiontype($inscriptiontype)
    {
        $this->inscriptiontype = $inscriptiontype;

        return $this;
    }

    /**
     * Get inscriptiontype
     *
     * @return boolean
     */
    public function getInscriptiontype()
    {
        return $this->inscriptiontype;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Activite
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->module = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add module
     *
     * @param \Futur\ModuleBundle\Entity\Module $module
     * @return Activite
     */
    public function addModule(\Futur\ModuleBundle\Entity\Module $module)
    {
        $this->module[] = $module;

        return $this;
    }

    /**
     * Remove module
     *
     * @param \Futur\ModuleBundle\Entity\Module $module
     */
    public function removeModule(\Futur\ModuleBundle\Entity\Module $module)
    {
        $this->module->removeElement($module);
    }

    /**
     * Get module
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModule()
    {
        return $this->module;
    }


    /**
     * Set module
     *
     * @param \Module $module
     * @return Activite
     */
    public function setModule(\Futur\ModuleBundle\Entity\Module $module)
    {
        $this->module = $module;

        return $this;
    }

    public function setSujet(\Futur\SujetBundle\Entity\Sujet $sujet = null)
    {
        $this->sujet = $sujet;
    }

    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Add cours
     *
     * @param \Futur\CoursBundle\Entity\Cours $cours
     * @return Activite
     */
    public function addCours(\Futur\CoursBundle\Entity\Cours $cours)
    {
        $this->cours[] = $cours;

        return $this;
    }

    /**
     * Remove cours
     *
     * @param \Futur\CoursBundle\Entity\Cours $cours
     */
    public function removeCours(\Futur\CoursBundle\Entity\Cours $cours)
    {
        $this->cours->removeElement($cours);
    }

    /**
     * Get cours
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCours()
    {
        return $this->cours;
    }

    /**
     * Add cours
     *
     * @param \Futur\CoursBundle\Entity\Cours $cours
     * @return Activite
     */
    public function addCour(\Futur\CoursBundle\Entity\Cours $cours)
    {
        $this->cours[] = $cours;

        return $this;
    }

    /**
     * Remove cours
     *
     * @param \Futur\CoursBundle\Entity\Cours $cours
     */
    public function removeCour(\Futur\CoursBundle\Entity\Cours $cours)
    {
        $this->cours->removeElement($cours);
    }

    /**
     * Add inscrits
     *
     * @param \Futur\UserBundle\Entity\User $inscrits
     * @return Activite
     */
    public function addInscrit(\Futur\UserBundle\Entity\User $inscrits)
    {
        $this->inscrits[] = $inscrits;

        return $this;
    }

    /**
     * Remove inscrits
     *
     * @param \Futur\UserBundle\Entity\User $inscrits
     */
    public function removeInscrit(\Futur\UserBundle\Entity\User $inscrits)
    {
        $this->inscrits->removeElement($inscrits);
    }

    /**
     * Get inscrits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInscrits()
    {
        return $this->inscrits;
    }

    /**
     * Set dateliminsc
     *
     * @param \DateTime $dateliminsc
     * @return Activite
     */
    public function setDateliminsc($dateliminsc)
    {
        $this->dateliminsc = $dateliminsc;

        return $this;
    }

    /**
     * Get dateliminsc
     *
     * @return \DateTime
     */
    public function getDateliminsc()
    {
        return $this->dateliminsc;
    }

    /**
     * Set done
     *
     * @param integer $done
     * @return Activite
     */
    public function setDone($done)
    {
        $this->done = $done;

        return $this;
    }

    /**
     * Get done
     *
     * @return integer
     */
    public function getDone()
    {
        return $this->done;
    }

    /**
     * Add groupes
     *
     * @param \Futur\UserBundle\Entity\Groupe $groupes
     * @return Activite
     */
    public function addGroupe(\Futur\SujetBundle\Entity\Groupe $groupes)
    {
        $this->groupes[] = $groupes;

        return $this;
    }

    /**
     * Remove groupes
     *
     * @param \Futur\UserBundle\Entity\Groupe $groupes
     */
    public function removeGroupe(\Futur\SujetBundle\Entity\Groupe $groupes)
    {
        $this->groupes->removeElement($groupes);
    }

    /**
     * Get groupes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroupes()
    {
        return $this->groupes;
    }
}
