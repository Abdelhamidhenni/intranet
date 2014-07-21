<?php

namespace Futur\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use FR3D\LdapBundle\Model\LdapUserInterface as LdapUserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Futur\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser implements LdapUserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable = true)
     */
    protected $dn;

    /**
     * @ORM\Column(type="string", nullable = true)
     */
    protected $cn;

    /**
     * @ORM\Column(type="string", nullable = true)
     */
    protected $firstName;

    /**
     * @ORM\Column(type="string", nullable = true)
     */
    protected $lastName;

    /**
     * @ORM\Column(type="string", nullable = true)
     */
    protected $mobilePhone;

    /**
     * @ORM\Column(type="text", nullable = true)
     */
    protected $picture;

    /**
     * @ORM\ManyToMany(targetEntity="Futur\ModuleBundle\Entity\Module", cascade={"persist"})
     */
    public $modules;

    /**
     * @ORM\ManyToMany(targetEntity="Futur\SujetBundle\Entity\Activite", cascade={"persist"})
     */
    public $activites;

    /**
     * @ORM\ManyToMany(targetEntity="Futur\SujetBundle\Entity\Groupe", cascade={"persist"})
     */
    public $groupes;

    /**
     * @ORM\ManyToMany(targetEntity="Futur\UserBundle\Entity\Corrige", cascade={"persist"})
     */
    public $corriges;

    /**
     * @ORM\OneToOne(targetEntity="Futur\UserBundle\Entity\Token", cascade={"persist"})
     */
    private $token;

    /**
     * @ORM\Column(name="note", type="integer")
     */
    public $note;

    public function __construct()
    {
        parent::__construct();
        if (empty($this->roles)) {
            $this->roles[] = 'ROLE_USER';
        }
        $this->modules = new \Doctrine\Common\Collections\ArrayCollection();
        $this->note = 0;
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

    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Set dn
     *
     * @param string $dn
     * @return User
     */
    public function setDn($dn)
    {
        $this->dn = $dn;
    }

    /**
     * Get dn
     *
     * @return string
     */
    public function getDn()
    {
        return $this->dn;
    }

    /**
     * Set cn
     *
     * @param string $cn
     * @return User
     */
    public function setCn($cn)
    {
        $this->cn = $cn;
    }

    /**
     * Get cn
     *
     * @return string
     */
    public function getCn()
    {
        return $this->cn;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set mobilePhone
     *
     * @param string $mobilePhone
     * @return User
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;

        return $this;
    }

    /**
     * Get mobilePhone
     *
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * Add modules
     *
     * @param \Futur\ModuleBundle\Entity\Module $modules
     * @return User
     */
    public function addModule(\Futur\ModuleBundle\Entity\Module $modules)
    {
        $this->modules[] = $modules;

        return $this;
    }

    /**
     * Remove modules
     *
     * @param \Futur\ModuleBundle\Entity\Module $modules
     */
    public function removeModule(\Futur\ModuleBundle\Entity\Module $modules)
    {
        $this->modules->removeElement($modules);
    }

    /**
     * Get modules
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModules()
    {
        return $this->modules;
    }

    /**
     * Add activites
     *
     * @param \Futur\SujetBundle\Entity\Activite $activites
     * @return User
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

    /**
     * Get activites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActivites()
    {
        return $this->activites;
    }

    /**
     * Add groupes
     *
     * @param \Futur\SujetBundle\Entity\Groupe $groupes
     * @return User
     */
    public function addGroupe(\Futur\SujetBundle\Entity\Groupe $groupes)
    {
        $this->groupes[] = $groupes;

        return $this;
    }

    /**
     * Remove groupes
     *
     * @param \Futur\SujetBundle\Entity\Groupe $groupes
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

    /**
     * Set token
     *
     * @param \Futur\UserBundle\Entity\Token $token
     * @return User
     */
    public function setToken(\Futur\UserBundle\Entity\Token $token = null)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return \Futur\UserBundle\Entity\Token
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return User
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Add corriges
     *
     * @param \Futur\UserBundle\Entity\Corrige $corriges
     * @return User
     */
    public function addCorrige(\Futur\UserBundle\Entity\Corrige $corriges)
    {
        $this->corriges[] = $corriges;

        return $this;
    }

    /**
     * Remove corriges
     *
     * @param \Futur\UserBundle\Entity\Corrige $corriges
     */
    public function removeCorrige(\Futur\UserBundle\Entity\Corrige $corriges)
    {
        $this->corriges->removeElement($corriges);
    }

    /**
     * Get corriges
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCorriges()
    {
        return $this->corriges;
    }

    /**
     * Set note
     *
     * @param integer $note
     * @return User
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
}
