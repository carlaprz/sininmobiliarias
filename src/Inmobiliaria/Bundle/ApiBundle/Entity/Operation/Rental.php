<?php

namespace Inmobiliaria\Bundle\ApiBundle\Entity\Operation;

use Doctrine\ORM\Mapping as ORM;
use Inmobiliaria\Bundle\ApiBundle\Entity\Operation;

/**
 * @ORM\Entity(repositoryClass="Inmobiliaria\Bundle\ApiBundle\Repository\RentalRepository")
 */
class Rental extends Operation
{
    //put your code here
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \Inmobiliaria\Bundle\ApiBundle\Entity\Operation\User
     */
    private $user;

    /**
     * @var \Inmobiliaria\Bundle\ApiBundle\Entity\Operation\Cost
     */
    private $cost;

    /**
     * @var \Inmobiliaria\Bundle\ApiBundle\Entity\Operation\Property
     */
    private $property;


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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Rental
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Rental
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set user
     *
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\Operation\User $user
     * @return Rental
     */
    public function setUser(\Inmobiliaria\Bundle\ApiBundle\Entity\Operation\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Inmobiliaria\Bundle\ApiBundle\Entity\Operation\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set cost
     *
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\Operation\Cost $cost
     * @return Rental
     */
    public function setCost(\Inmobiliaria\Bundle\ApiBundle\Entity\Operation\Cost $cost = null)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return \Inmobiliaria\Bundle\ApiBundle\Entity\Operation\Cost 
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set property
     *
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\Operation\Property $property
     * @return Rental
     */
    public function setProperty(\Inmobiliaria\Bundle\ApiBundle\Entity\Operation\Property $property = null)
    {
        $this->property = $property;

        return $this;
    }

    /**
     * Get property
     *
     * @return \Inmobiliaria\Bundle\ApiBundle\Entity\Operation\Property 
     */
    public function getProperty()
    {
        return $this->property;
    }
}
