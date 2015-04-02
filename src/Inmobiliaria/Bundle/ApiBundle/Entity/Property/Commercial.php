<?php

namespace Inmobiliaria\Bundle\ApiBundle\Entity\Property;

use Doctrine\ORM\Mapping as ORM;
use Inmobiliaria\Bundle\ApiBundle\Entity\Property;
use Inmobiliaria\Bundle\ApiBundle\Traits\HabitableTrait;

/**
 * @ORM\Entity
 */
class Commercial extends Property implements \JsonSerializable
{

    use HabitableTrait;

    private $frente;
    
    private $largo;
    
    private $roof;

    function getFrente()
    {
        return $this->frente;
    }

    function getLargo()
    {
        return $this->largo;
    }

    function getRoof()
    {
        return $this->roof;
    }

    function setFrente($frente)
    {
        $this->frente = $frente;
    }

    function setLargo($largo)
    {
        $this->largo = $largo;
    }

    function setRoof($roof)
    {
        $this->roof = $roof;
    }

        
    public function jsonSerialize()
    {
        
    }

}
