<?php

namespace Futur\TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Futur\TicketBundle\Entity\TicketRepository")
 */

class Ticket
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
     * @var integer
     *
     * @ORM\Column(name="idauteur", type="integer")
     */
    private $idauteur;


    /**
     * @var string
     *
     * @ORM\Column(name="probleme", type="text")
     */
    private $probleme;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse", nullable=true, type="text")
     */
    private $reponse;

    /**
     * @var string
     *
     * @ORM\Column(name="assignation", nullable=true, type="string", length=20)
     */
    private $assignation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="repondu", type="boolean")
     */
    private $repondu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="resolu", type="boolean")
     */
    private $resolu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vu", type="boolean")
     */
    private $vu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vuuser", type="boolean")
     */
    private $vuuser;

    /**
     * @var boolean
     *
     * @ORM\Column(name="statut", type="boolean")
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=100)
     */
    private $titre;

    /**
     * @var date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    public function __construct()
    {
        $this->date = new \Datetime;
        $this->reponse = '';
        $this->repondu = false;
        $this->vu = false;
        $this->vuuser = false;
        $this->resolu = false;
        $this->statut = true;
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
     * Set nom
     *
     * @param string $nom
     * @return Probleme
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Probleme
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Probleme
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set probleme
     *
     * @param string $probleme
     * @return Probleme
     */
    public function setProbleme($probleme)
    {
        $this->probleme = $probleme;

        return $this;
    }

    /**
     * Get probleme
     *
     * @return string
     */
    public function getProbleme()
    {
        return $this->probleme;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Probleme
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }


    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Probleme
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set assignation
     *
     * @param string $assignation
     * @return Probleme
     */
    public function setAssignation($assignation)
    {
        $this->assignation = $assignation;

        return $this;
    }

    /**
     * Get assignation
     *
     * @return string
     */
    public function getAssignation()
    {
        return $this->assignation;
    }

    /**
     * Set reponse
     *
     * @param string $reponse
     * @return Probleme
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return string
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * Set repondu
     *
     * @param boolean $repondu
     * @return Probleme
     */
    public function setRepondu($repondu)
    {
        $this->repondu = $repondu;

        return $this;
    }

    /**
     * Get repondu
     *
     * @return boolean
     */
    public function getRepondu()
    {
        return $this->repondu;
    }

    /**
     * Set resolu
     *
     * @param boolean $resolu
     * @return Probleme
     */
    public function setResolu($resolu)
    {
        $this->resolu = $resolu;

        return $this;
    }

    /**
     * Get resolu
     *
     * @return boolean
     */
    public function getResolu()
    {
        return $this->resolu;
    }

    /**
     * Set vu
     *
     * @param boolean $vu
     * @return Probleme
     */
    public function setVu($vu)
    {
        $this->vu = $vu;

        return $this;
    }

    /**
     * Get vu
     *
     * @return boolean
     */
    public function getVu()
    {
        return $this->vu;
    }

    /**
     * Set idauteur
     *
     * @param integer $idauteur
     * @return Ticket
     */
    public function setIdauteur($idauteur)
    {
        $this->idauteur = $idauteur;

        return $this;
    }

    /**
     * Get idauteur
     *
     * @return integer
     */
    public function getIdauteur()
    {
        return $this->idauteur;
    }

    /**
     * Set statut
     *
     * @param boolean $statut
     * @return Ticket
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    /**
     * Get statut
     *
     * @return boolean
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set vuuser
     *
     * @param boolean $vuuser
     * @return Ticket
     */
    public function setVuuser($vuuser)
    {
        $this->vuuser = $vuuser;
    }

    /**
     * Get vuuser
     *
     * @return boolean
     */
    public function getVuuser()
    {
        return $this->vuuser;
    }
}
