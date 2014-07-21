<?php

namespace Futur\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Futur\SujetBundle\Entity\Groupe;
use Futur\UserBundle\Entity\User;

/**
 * Correcteur
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Futur\UserBundle\Entity\CorrecteurRepository")
 */
class Correcteur
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
     * @ORM\OneToOne(targetEntity="Futur\SujetBundle\Entity\Activite", cascade={"persist", "remove"})
     */
    public $activite;

    /**
     * @ORM\OneToOne(targetEntity="Futur\UserBundle\Entity\User", cascade={"persist", "remove"})
     */
    public $correcteur;

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
     * Set activite
     *
     * @param \Futur\SujetBundle\Entity\Activite $activite
     * @return Correcteur
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
     * Set correcteur
     *
     * @param \Futur\UserBundle\Entity\User $correcteur
     * @return Correcteur
     */
    public function setCorrecteur(\Futur\UserBundle\Entity\User $correcteur = null)
    {
        $this->correcteur = $correcteur;

        return $this;
    }

    /**
     * Get correcteur
     *
     * @return \Futur\UserBundle\Entity\User
     */
    public function getCorrecteur()
    {
        return $this->correcteur;
    }
}
