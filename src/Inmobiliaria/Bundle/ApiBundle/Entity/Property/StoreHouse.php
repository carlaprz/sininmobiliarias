<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity\Property;

use Doctrine\ORM\Mapping as ORM;
use Inmobiliaria\Bundle\ApiBundle\Entity\Property;
use Inmobiliaria\Bundle\ApiBundle\Traits\UninhabitableTrait;

/**
 * @ORM\Entity
*/
class StoreHouse extends Property implements \JsonSerializable
{
    use UninhabitableTrait;
    
    public function jsonSerialize()
    {
        
    }

    
}
