<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity\Property;

use Doctrine\ORM\Mapping as ORM;
use Inmobiliaria\Bundle\ApiBundle\Entity\Property;
use Inmobiliaria\Bundle\ApiBundle\Traits\HabitableTrait;

/**
 * @ORM\Entity
 */
class Apartment extends Property implements \JsonSerializable
{
    use HabitableTrait; 
    
    private  $solarium;
    
    private  $gym;
    
    private  $balcony;
    
    private  $expenses;
    
    private  $floors;
    
    private  $apartments;
    
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

    public function jsonSerialize()
    {
        
    }

}
