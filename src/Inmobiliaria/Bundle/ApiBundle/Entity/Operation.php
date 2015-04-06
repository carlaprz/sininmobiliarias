<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="operation_type", type="integer")
 * @ORM\DiscriminatorMap({1 = "Inmobiliaria\Bundle\ApiBundle\Entity\Operation\Sale", 
 *                        2 = "Inmobiliaria\Bundle\ApiBundle\Entity\Operation\Rental",
 *                        3 = "Inmobiliaria\Bundle\ApiBundle\Entity\Operation\TemporaryRental" })
 */

abstract class Operation {
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="operations")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     **/
    protected $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="Cost")
     * @ORM\JoinColumn(name="cost_id", referencedColumnName="id")
     **/
    protected $cost;
    
    /**
     * @ORM\ManyToOne(targetEntity="Property", inversedBy="operations")
     * @ORM\JoinColumn(name="property_id", referencedColumnName="id")
     **/
    protected $property;
    
    /** 
      * @ORM\Column(type="datetime", name="created_at") 
      */
    protected $createdAt;
    
    /** 
      * @ORM\Column(type="datetime", name="updated_at") 
      */
    protected $updatedAt;
    

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
     * @return Operation
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
     * @return Operation
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
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\User $user
     * @return Operation
     */
    public function setUser(\Inmobiliaria\Bundle\ApiBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Inmobiliaria\Bundle\ApiBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set cost
     *
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\Cost $cost
     * @return Operation
     */
    public function setCost(\Inmobiliaria\Bundle\ApiBundle\Entity\Cost $cost = null)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return \Inmobiliaria\Bundle\ApiBundle\Entity\Cost 
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set property
     *
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\Property $property
     * @return Operation
     */
    public function setProperty(\Inmobiliaria\Bundle\ApiBundle\Entity\Property $property = null)
    {
        $this->property = $property;

        return $this;
    }

    /**
     * Get property
     *
     * @return \Inmobiliaria\Bundle\ApiBundle\Entity\Property 
     */
    public function getProperty()
    {
        return $this->property;
    }
}
