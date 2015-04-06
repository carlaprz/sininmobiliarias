<?php

namespace Inmobiliaria\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="image_presentation")
 */
class ImagePresentation
{
   /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $width;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $height;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url;
    
    /**
     * @ORM\ManyToOne(targetEntity="Image", inversedBy="presentations")
     * @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     **/
    private $image;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true, name="static_file_name")
     */
    private $staticFileName;
    
}
