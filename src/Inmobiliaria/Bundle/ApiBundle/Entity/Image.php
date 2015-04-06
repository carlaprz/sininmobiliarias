<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="integer")
 * @ORM\DiscriminatorMap({ 1 = "PropertyImage", 2 = "UserImage"})
 */

abstract class Image
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $createdAt;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $main;
    
   /**
     * @ORM\OneToMany(targetEntity="ImagePresentation", mappedBy="image", cascade={"persist", "remove"})
     **/
    protected $presentations;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true, name="temporal_file_name")
     */
    protected $temporalFileName;
    
    public function __construct() {
        $this->createdAt = new \DateTime();
        $this->main = false;
        $this->presentations = new ArrayCollection();
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
     * @return Image
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
     * @return Image
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
     * @return Image
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
     * Add presentations
     *
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\ImagePresentation $presentations
     * @return Image
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
