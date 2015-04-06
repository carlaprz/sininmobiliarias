<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_image")
 */
class UserImage extends Image
{
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="images")
     **/
    protected $user;
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
     * @return UserImage
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
     * @return UserImage
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
     * @return UserImage
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
     * Set user
     *
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\User $user
     * @return UserImage
     */
    public function setUser(\Inmobiliaria\Bundle\ApiBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Inmobiliaria\Bundle\ApiBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add presentations
     *
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\ImagePresentation $presentations
     * @return UserImage
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
