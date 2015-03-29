<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="property_image")
 */

class PropertyImage extends Image
{
    /**
     * @ORM\OneToMany(targetEntity="Property", mappedBy="images")
     **/
    protected $property;
}
