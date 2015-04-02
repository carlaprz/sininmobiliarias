<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity\Property;

use Doctrine\ORM\Mapping as ORM;
use Inmobiliaria\Bundle\ApiBundle\Entity\Property;
use Inmobiliaria\Bundle\ApiBundle\Traits\HabitableTrait;


/**
 * @ORM\Entity
*/
class House extends Property implements \JsonSerializable
{
    use HabitableTrait;
    
    private  $roof;
    
    private  $frente;
    
    private  $largo;
    
    private  $storey;
    
    function getRoof()
    {
        return $this->roof;
    }

    function getFrente()
    {
        return $this->frente;
    }

    function getLargo()
    {
        return $this->largo;
    }

    function getStorey()
    {
        return $this->storey;
    }

    function setRoof($roof)
    {
        $this->roof = $roof;
    }

    function setFrente($frente)
    {
        $this->frente = $frente;
    }

    function setLargo($largo)
    {
        $this->largo = $largo;
    }

    function setStorey($storey)
    {
        $this->storey = $storey;
    }

    public function jsonSerialize()
    {
        
    }
  

}