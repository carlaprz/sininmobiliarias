<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity\Property;

use Doctrine\ORM\Mapping as ORM;
use Inmobiliaria\Bundle\ApiBundle\Entity\Property;

/**
 * @ORM\Entity
*/
class Allotment extends Property implements \JsonSerializable
{
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
