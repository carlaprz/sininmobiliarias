<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @Entity
 * @InheritanceType("JOINED")
 * @DiscriminatorColumn(name="discr", type="integer")
 * @DiscriminatorMap({1 = "House", 2 = "Apartment", 3 = "Ph", 4="StoreHouse", 5 = "Loft", 6 = "Commercial", 7 = "Allotment", 8 = "CountyHouse" })
 */
abstract class Property {
   
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="properties")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     **/
    protected $user;
    
    /**
     * @ManyToOne(targetEntity="Zone")
     * @JoinColumn(name="zone_id", referencedColumnName="id")
     **/
    protected $zone;
    
    /**
     * @ORM\OneToMany(targetEntity="Operation", mappedBy="property")
     **/
    protected $operations;
    
    /**
     * @ORM\OneToMany(targetEntity="PropertyImage", mappedBy="property")
     **/
    protected $images;
    
    /** 
      * @ORM\Column(type="datetime", name="created_at") 
      */
    protected $createdAt;
    
    /** 
     * @ORM\Column(type="datetime", name="updated_at") 
     **/
    protected $updatedAt;
    
    /**
     * @ORM\Column(type="string", length=100)
     **/
    protected $postcode;
    
    /**
     * @ORM\Column(type="string", length=100)
     **/
    protected $address;
    
    /**
     * @ORM\Column(type="text")
     **/
    protected $description;
    
    /**
     * @ORM\Column(type="integer")
     **/
    protected $age;
   
    /**
     * @ORM\Column(type="boolean")
     **/
    protected $wather;
    
    /**
     * @ORM\Column(type="boolean")
     **/
    protected $phone;
    
    /**
     * @ORM\Column(type="boolean")
     **/
    protected $internet;
    
    /**
     * @ORM\Column(type="boolean")
     **/
    protected $electricity;
    
    /**
     * @ORM\Column(type="boolean")
     **/
    protected $gas;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     **/
    protected $uncoveredArea;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     **/
    protected $coveredArea;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     **/
    protected $totalArea;
    
    public function __construct() 
    {
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }

}
