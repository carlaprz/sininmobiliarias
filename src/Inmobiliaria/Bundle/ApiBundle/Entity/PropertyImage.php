<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="property_image")
 */

class PropertyImage extends Image
{
    /**
     * @ORM\ManyToOne(targetEntity="Property", inversedBy="images")
     **/
    protected $property;
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var boolean
     */
    private $main;

    /**
     * @var string
     */
    private $temporalFileName;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $presentations;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->presentations = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return PropertyImage
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set main
     *
     * @param boolean $main
     * @return PropertyImage
     */
    public function setMain($main)
    {
        $this->main = $main;

        return $this;
    }

    /**
     * Get main
     *
     * @return boolean 
     */
    public function getMain()
    {
        return $this->main;
    }

    /**
     * Set temporalFileName
     *
     * @param string $temporalFileName
     * @return PropertyImage
     */
    public function setTemporalFileName($temporalFileName)
    {
        $this->temporalFileName = $temporalFileName;

        return $this;
    }

    /**
     * Get temporalFileName
     *
     * @return string 
     */
    public function getTemporalFileName()
    {
        return $this->temporalFileName;
    }

    /**
     * Set property
     *
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\Property $property
     * @return PropertyImage
     */
    public function setProperty(\Inmobiliaria\Bundle\ApiBundle\Entity\Property $property = null)
    {
        $this->property = $property;

        return $this;
    }

    /**
     * Get property
     *
     * @return \Inmobiliaria\Bundle\ApiBundle\Entity\Property 
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Add presentations
     *
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\ImagePresentation $presentations
     * @return PropertyImage
     */
    public function addPresentation(\Inmobiliaria\Bundle\ApiBundle\Entity\ImagePresentation $presentations)
    {
        $this->presentations[] = $presentations;

        return $this;
    }

    /**
     * Remove presentations
     *
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\ImagePresentation $presentations
     */
    public function removePresentation(\Inmobiliaria\Bundle\ApiBundle\Entity\ImagePresentation $presentations)
    {
        $this->presentations->removeElement($presentations);
    }

    /**
     * Get presentations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPresentations()
    {
        return $this->presentations;
    }
}
