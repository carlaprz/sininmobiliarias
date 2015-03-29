<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="property_habitable")
**/
abstract class Habitable extends Property 
{
    
     /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="boolean")
     **/
    protected $terrace;
    
    /**
     * @ORM\Column(type="boolean")
     **/
    protected $playground;
    
    /**
     * @ORM\Column(type="boolean")
     **/
    protected $airconditioning;

    /**
     * @ORM\Column(type="boolean")
     **/
    protected $laundry;

    /**
     * @ORM\Column(type="boolean")
     **/
    protected $jacuzzi;
    
    /**
     * @ORM\Column(type="boolean", name="swimming_pool")
     **/
    protected $swimmingPool;
    
    /**
     * @ORM\Column(type="boolean")
     **/
    protected $grill;
    
    /**
     * @ORM\Column(type="integer")
     **/
    protected $bathroom;
    
    /**
     * @ORM\Column(type="boolean")
     **/
    protected $heating;   
    
    /**
     * @ORM\Column(type="boolean", name="cable_tv")
     **/
    protected $cableTv; 
    
}
