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
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return ImagePresentation
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set width
     *
     * @param integer $width
     * @return ImagePresentation
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     * @return ImagePresentation
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return ImagePresentation
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set staticFileName
     *
     * @param string $staticFileName
     * @return ImagePresentation
     */
    public function setStaticFileName($staticFileName)
    {
        $this->staticFileName = $staticFileName;

        return $this;
    }

    /**
     * Get staticFileName
     *
     * @return string 
     */
    public function getStaticFileName()
    {
        return $this->staticFileName;
    }

    /**
     * Set image
     *
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\Image $image
     * @return ImagePresentation
     */
    public function setImage(\Inmobiliaria\Bundle\ApiBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Inmobiliaria\Bundle\ApiBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }
}
