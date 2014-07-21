<?php

namespace Futur\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Corrige
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Futur\UserBundle\Entity\CorrigeRepository")
 */
class Corrige
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
     * @ORM\OneToOne(targetEntity="Futur\SujetBundle\Entity\Groupe", cascade={"persist", "remove"})
     */
    public $corrige;

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
     * @return Corrige
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
     * Set corrige
     *
     * @param \Futur\SujetBundle\Entity\Groupe $corrige
     * @return Corrige
     */
    public function setCorrige(\Futur\SujetBundle\Entity\Groupe $corrige = null)
    {
        $this->corrige = $corrige;

        return $this;
    }

    /**
     * Get corrige
     *
     * @return \Futur\SujetBundle\Entity\Groupe
     */
    public function getCorrige()
    {
        return $this->corrige;
    }
}
