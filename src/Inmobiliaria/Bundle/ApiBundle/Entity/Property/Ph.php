<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity\Property;

use Doctrine\ORM\Mapping as ORM;
use Inmobiliaria\Bundle\ApiBundle\Entity\Property;
use Inmobiliaria\Bundle\ApiBundle\Traits\HabitableTrait;


/**
 * @ORM\Entity
 */
class Ph extends Property implements \JsonSerializable
{
    use HabitableTrait;
    
    private  $solarium;
    
    private  $gym;
    
    private  $balcony;
    
    private  $expenses;
    
    private  $floors;
    
    private  $apartments;
    
    private  $roof;
    
    private  $frente;
    
    private  $largo;
    
    private  $storey;
    
    function getSolarium()
    {
        return $this->solarium;
    }

    function getGym()
    {
        return $this->gym;
    }

    function getBalcony()
    {
        return $this->balcony;
    }

    function getExpenses()
    {
        return $this->expenses;
    }

    function getFloors()
    {
        return $this->floors;
    }

    function getApartments()
    {
        return $this->apartments;
    }

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

    function setSolarium($solarium)
    {
        $this->solarium = $solarium;
    }

    function setGym($gym)
    {
        $this->gym = $gym;
    }

    function setBalcony($balcony)
    {
        $this->balcony = $balcony;
    }

    function setExpenses($expenses)
    {
        $this->expenses = $expenses;
    }

    function setFloors($floors)
    {
        $this->floors = $floors;
    }

    function setApartments($apartments)
    {
        $this->apartments = $apartments;
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
