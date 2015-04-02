<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity\Property;

use Doctrine\ORM\Mapping as ORM;
use Inmobiliaria\Bundle\ApiBundle\Entity\Property;
use Inmobiliaria\Bundle\ApiBundle\Traits\HabitableTrait;

/**
 * @ORM\Entity
*/
class House extends Property
{
    use HabitableTrait;
    
    
}