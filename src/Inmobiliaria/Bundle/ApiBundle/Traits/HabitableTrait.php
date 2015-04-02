<?php

namespace Inmobiliaria\Bundle\ApiBundle\Traits;

trait HabitableTrait
{

    private $terrace;
    
    private $playground;
    
    private $airconditioning;
    
    private $laundry;
    
    private $jacuzzi;
    
    private $swimmingPool;
    
    private $grill;
    
    private $bathroom;
    
    private $heating;
    
    private $cableTv;
    
    private $water;
    
    private $internet;
    
    private $electricity;
    
    private $gas;
    
    private $condition;
    
    private $luminosity;
    
    private $alarma;
    
    private $amoblado;
    
    private $vigilancia;


    
    function serialise()
    {
        $array = [
            "terrace" => $this->terrace,
            "playground" => $this->playground,
            "airconditioning" => $this->airconditioning,
            "laundry" => $this->laundry,
            "jacuzzi" => $this->jacuzzi,
            "swimmingPool" => $this->swimmingPool,
            "grill" => $this->grill,
            "bathroom" => $this->bathroom,
            "terrace" => $this->terrace,
            "heating" => $this->heating,
            "cableTv" => $this->cableTv,
            "water" => $this->water,
            "internet" => $this->internet,
            "electricity" => $this->electricity,
            "terrace" => $this->terrace,
            "gas" => $this->gas
        ];
        
        $this->jsonAtrributes = json_encode($array);
    }

}
