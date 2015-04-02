<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity\Property;

use Doctrine\ORM\Mapping as ORM;
use Inmobiliaria\Bundle\ApiBundle\Entity\Property;
use Inmobiliaria\Bundle\ApiBundle\Traits\HabitableTrait;

/**
 * @ORM\Entity
*/
class Allotment extends Property implements \JsonSerializable
{
    use HabitableTrait;
    
    private  $frente;
    
    private  $largo;
    
    function getFrente()
    {
        return $this->frente;
    }

    function getLargo()
    {
        return $this->largo;
    }

    function setFrente($frente)
    {
        $this->frente = $frente;
    }

    function setLargo($largo)
    {
        $this->largo = $largo;
    }
        
    public function jsonSerialize()
    {
        
    }
    
}
