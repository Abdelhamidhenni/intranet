<?php

namespace Futur\ModuleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Futur\SujetBundle\Entity\Activite;

/**
 * Module
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Futur\ModuleBundle\Entity\ModuleRepository")
 */
class Module
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
     * @var integer
     *
     * @ORM\Column(name="credits", type="integer")
     */
    private $credits;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datestart", type="datetime")
     */
    private $datestart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateend", type="datetime")
     */
    private $dateend;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var array
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @ORM\OneToMany(targetEntity="Futur\SujetBundle\Entity\Activite", mappedBy="module", cascade={"persist", "remove"})
     */
    private $activites;

    /**
     * @var array
     *
     * @ORM\Column(name="projets", type="array")
     */
    private $projets;

    /**
     * @var string
     *
     * @ORM\Column(name="skills", type="text")
     */
    private $skills;


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
     * @return Module
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
     * Set credits
     *
     * @param integer $credits
     * @return Module
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;

        return $this;
    }

    /**
     * Get credits
     *
     * @return integer
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * Set datestart
     *
     * @param \DateTime $datestart
     * @return Module
     */
    public function setDatestart($datestart)
    {
        $this->datestart = $datestart;

        return $this;
    }

    /**
     * Get datestart
     *
     * @return \DateTime
     */
    public function getDatestart()
    {
        return $this->datestart;
    }

    /**
     * Set dateend
     *
     * @param \DateTime $dateend
     * @return Module
     */
    public function setDateend($dateend)
    {
        $this->dateend = $dateend;

        return $this;
    }

    /**
     * Get dateend
     *
     * @return \DateTime
     */
    public function getDateend()
    {
        return $this->dateend;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Module
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
     * Set status
     *
     * @param array $status
     * @return Module
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return array
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set projets
     *
     * @param array $projets
     * @return Module
     */
    public function setProjets($projets)
    {
        $this->projets = $projets;

        return $this;
    }

    /**
     * Get projets
     *
     * @return array
     */
    public function getProjets()
    {
        return $this->projets;
    }

    /**
     * Set skills
     *
     * @param string $skills
     * @return Module
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;

        return $this;
    }

    /**
     * Get skills
     *
     * @return string
     */
    public function getSkills()
    {
        return $this->skills;
    }

    public function __toString()
    {
        return $this->name;
    }


    /**
     * Set activites
     *
     * @param \Futur\SujetBundle\Entity\Activite $activites
     * @return Module
     */
    public function setActivites(\Futur\SujetBundle\Entity\Activite $activites)
    {
        $this->activites = $activites;

        return $this;
    }

    /**
     * Get activites
     *
     * @return \Futur\SujetBundle\Entity\Activite
     */
    public function getActivites()
    {
        return $this->activites;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->activites = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add activites
     *
     * @param \Futur\SujetBundle\Entity\Activite $activites
     * @return Module
     */
    public function addActivite(\Futur\SujetBundle\Entity\Activite $activites)
    {
        $this->activites[] = $activites;

        return $this;
    }

    /**
     * Remove activites
     *
     * @param \Futur\SujetBundle\Entity\Activite $activites
     */
    public function removeActivite(\Futur\SujetBundle\Entity\Activite $activites)
    {
        $this->activites->removeElement($activites);
    }
}
