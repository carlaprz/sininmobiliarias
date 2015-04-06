<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity\Property;

use Doctrine\ORM\Mapping as ORM;
use Inmobiliaria\Bundle\ApiBundle\Entity\Property;
use Inmobiliaria\Bundle\ApiBundle\Traits\HabitableApartementTrait;


/**
 * @ORM\Entity
*/
class Loft extends Property  implements \JsonSerializable
{
    use HabitableApartementTrait;
   
    public function jsonSerialize()
    {
        
    }

}
