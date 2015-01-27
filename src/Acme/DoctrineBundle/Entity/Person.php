<?php
/**
 * Created by PhpStorm.
 * User: rspielmann
 * Date: 09.12.2014
 * Time: 11:24
 */

namespace Acme\DoctrineBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Acme\DoctrineBundle\Entity\PersonRepository")
 * @ORM\Table(name="person")
 */
class Person
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\ManyToOne(targetEntity="Place", inversedBy="persons")
     * @ORM\JoinColumn(name="place_id", referencedColumnName="id")
     */
    protected $place;

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
     * @return Person
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
     * Set place
     *
     * @param \Acme\DoctrineBundle\Entity\Place $place
     * @return Person
     */
    public function setPlace(\Acme\DoctrineBundle\Entity\Place $place = null)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return \Acme\DoctrineBundle\Entity\Place 
     */
    public function getPlace()
    {
        return $this->place;
    }
}
