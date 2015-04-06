<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @Entity
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="operation_type", type="integer")
 * @DiscriminatorMap({1 = "Sale", 2 = "Rental", 3 = "TemporaryRental" })
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
    
}
