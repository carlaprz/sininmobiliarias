<?php

namespace Inmobiliaria\Bundle\ApiBundle\Entity\Property;

use Doctrine\ORM\Mapping as ORM;
use Inmobiliaria\Bundle\ApiBundle\Entity\Property;
use Inmobiliaria\Bundle\ApiBundle\Traits\CommercialTrait;

/**
 * @ORM\Entity
 */
class Commercial extends Property implements \JsonSerializable
{

    use CommercialTrait;

    public function jsonSerialize()
    {
        
    }

}
