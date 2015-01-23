<?php

namespace Futur\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Token
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Futur\UserBundle\Entity\TokenRepository")
 */
class Token
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
     * @var \DateTime
     *
     * @ORM\Column(name="datestart", type="datetime", nullable=true)
     */
    private $datestart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateend", type="datetime", nullable=true )
     */
    private $dateend;

    /**
     * @var string
     *
     * @ORM\Column(name="str", type="string", nullable=true, length=255)
     */
    private $str;

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
     * Set datestart
     *
     * @param \DateTime $datestart
     * @return Token
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
     * @return Token
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
     * Set str
     *
     * @param string $str
     * @return Token
     */
    public function setStr($str)
    {
        $this->str = $str;

        return $this;
    }

    /**
     * Get str
     *
     * @return string
     */
    public function getStr()
    {
        return $this->str;
    }
}
