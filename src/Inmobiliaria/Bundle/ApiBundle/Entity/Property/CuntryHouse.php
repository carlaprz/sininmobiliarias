<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity\Property;

use Doctrine\ORM\Mapping as ORM;
use Inmobiliaria\Bundle\ApiBundle\Entity\Property;
use Inmobiliaria\Bundle\ApiBundle\Traits\HabitableTrait;

/**
 * @ORM\Entity
*/
class CuntryHouse extends Property implements \JsonSerializable
{
    use HabitableTrait;
    
    private  $roof;
    
    private  $frente;
    
    private  $largo;
    
    private  $solarium;

    private  $storey;
    
    private  $tennisCourt;

    private  $soccer;
    
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

    function getSolarium()
    {
        return $this->solarium;
    }

    function getStorey()
    {
        return $this->storey;
    }

    function getTennisCourt()
    {
        return $this->tennisCourt;
    }

    function getSoccer()
    {
        return $this->soccer;
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

    function setSolarium($solarium)
    {
        $this->solarium = $solarium;
    }

    function setStorey($storey)
    {
        $this->storey = $storey;
    }

    function setTennisCourt($tennisCourt)
    {
        $this->tennisCourt = $tennisCourt;
    }

    function setSoccer($soccer)
    {
        $this->soccer = $soccer;
    }

    public function jsonSerialize()
    {
        
    }

}
