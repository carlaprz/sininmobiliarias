<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity\Property;

use Doctrine\ORM\Mapping as ORM;
use Inmobiliaria\Bundle\ApiBundle\Entity\Property;
use Inmobiliaria\Bundle\ApiBundle\Traits\HabitableApartementTrait;

/**
 * @ORM\Entity
 */
class Apartment extends Property implements \JsonSerializable
{
    use HabitableApartementTrait; 
    
    public function jsonSerialize()
    {
        
    }

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $postcode;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $age;

    /**
     * @var integer
     */
    private $rooms;

    /**
     * @var string
     */
    private $uncoveredArea;

    /**
     * @var string
     */
    private $coveredArea;

    /**
     * @var string
     */
    private $totalArea;

    /**
     * @var boolean
     */
    private $credit;

    /**
     * @var boolean
     */
    private $financing;

    /**
     * @var string
     */
    private $jsonAttributes;

    /**
     * @var \Inmobiliaria\Bundle\ApiBundle\Entity\Property\User
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $operations;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $images;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->operations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Apartment
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Apartment
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     * @return Apartment
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Apartment
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Apartment
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return Apartment
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set rooms
     *
     * @param integer $rooms
     * @return Apartment
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;

        return $this;
    }

    /**
     * Get rooms
     *
     * @return integer 
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * Set uncoveredArea
     *
     * @param string $uncoveredArea
     * @return Apartment
     */
    public function setUncoveredArea($uncoveredArea)
    {
        $this->uncoveredArea = $uncoveredArea;

        return $this;
    }

    /**
     * Get uncoveredArea
     *
     * @return string 
     */
    public function getUncoveredArea()
    {
        return $this->uncoveredArea;
    }

    /**
     * Set coveredArea
     *
     * @param string $coveredArea
     * @return Apartment
     */
    public function setCoveredArea($coveredArea)
    {
        $this->coveredArea = $coveredArea;

        return $this;
    }

    /**
     * Get coveredArea
     *
     * @return string 
     */
    public function getCoveredArea()
    {
        return $this->coveredArea;
    }

    /**
     * Set totalArea
     *
     * @param string $totalArea
     * @return Apartment
     */
    public function setTotalArea($totalArea)
    {
        $this->totalArea = $totalArea;

        return $this;
    }

    /**
     * Get totalArea
     *
     * @return string 
     */
    public function getTotalArea()
    {
        return $this->totalArea;
    }

    /**
     * Set credit
     *
     * @param boolean $credit
     * @return Apartment
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return boolean 
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set financing
     *
     * @param boolean $financing
     * @return Apartment
     */
    public function setFinancing($financing)
    {
        $this->financing = $financing;

        return $this;
    }

    /**
     * Get financing
     *
     * @return boolean 
     */
    public function getFinancing()
    {
        return $this->financing;
    }

    /**
     * Set jsonAttributes
     *
     * @param string $jsonAttributes
     * @return Apartment
     */
    public function setJsonAttributes($jsonAttributes)
    {
        $this->jsonAttributes = $jsonAttributes;

        return $this;
    }

    /**
     * Get jsonAttributes
     *
     * @return string 
     */
    public function getJsonAttributes()
    {
        return $this->jsonAttributes;
    }

    /**
     * Set user
     *
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\Property\User $user
     * @return Apartment
     */
    public function setUser(\Inmobiliaria\Bundle\ApiBundle\Entity\Property\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Inmobiliaria\Bundle\ApiBundle\Entity\Property\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add operations
     *
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\Property\Operation $operations
     * @return Apartment
     */
    public function addOperation(\Inmobiliaria\Bundle\ApiBundle\Entity\Property\Operation $operations)
    {
        $this->operations[] = $operations;

        return $this;
    }

    /**
     * Remove operations
     *
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\Property\Operation $operations
     */
    public function removeOperation(\Inmobiliaria\Bundle\ApiBundle\Entity\Property\Operation $operations)
    {
        $this->operations->removeElement($operations);
    }

    /**
     * Get operations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * Add images
     *
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\Property\PropertyImage $images
     * @return Apartment
     */
    public function addImage(\Inmobiliaria\Bundle\ApiBundle\Entity\Property\PropertyImage $images)
    {
        $this->images[] = $images;

        return $this;
    }

    /**
     * Remove images
     *
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\Property\PropertyImage $images
     */
    public function removeImage(\Inmobiliaria\Bundle\ApiBundle\Entity\Property\PropertyImage $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }
}
