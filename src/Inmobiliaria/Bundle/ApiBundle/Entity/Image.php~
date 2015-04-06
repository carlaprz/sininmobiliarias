<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="integer")
 * @ORM\DiscriminatorMap({ 1 = "PropertyImage", 2 = "UserImage"})
 */

abstract class Image
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $createdAt;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $main;
    
   /**
     * @ORM\OneToMany(targetEntity="ImagePresentation", mappedBy="image", cascade={"persist", "remove"})
     **/
    protected $presentations;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true, name="temporal_file_name")
     */
    protected $temporalFileName;
    
    public function __construct() {
        $this->createdAt = new \DateTime();
        $this->main = false;
        $this->presentations = new ArrayCollection();
    }
}
