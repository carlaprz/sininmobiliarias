<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity\Property;

use Doctrine\ORM\Mapping as ORM;
use Inmobiliaria\Bundle\ApiBundle\Entity\Property;
use Inmobiliaria\Bundle\ApiBundle\Traits\HabitableHouseTrait;

/**
 * @ORM\Entity
*/
class CuntryHouse extends Property implements \JsonSerializable
{
    use HabitableHouseTrait;
    
    public function jsonSerialize()
    {
        
    }

}
