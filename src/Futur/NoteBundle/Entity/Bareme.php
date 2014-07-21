<?php

namespace Futur\NoteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bareme
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Futur\NoteBundle\Entity\BaremeRepository")
 */
class Bareme
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
     * @var float
     *
     * @ORM\Column(name="notemax", type="float")
     */
    private $notemax;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

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
     * Set notemax
     *
     * @param float $notemax
     * @return Bareme
     */
    public function setNotemax($notemax)
    {
        $this->notemax = $notemax;

        return $this;
    }

    /**
     * Get notemax
     *
     * @return float
     */
    public function getNotemax()
    {
        return $this->notemax;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Bareme
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
}
