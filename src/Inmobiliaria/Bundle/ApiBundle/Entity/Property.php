<?php

namespace Inmobiliaria\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Inmobiliaria\Bundle\ApiBundle\Repository\PropertyRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="integer")
 * @ORM\DiscriminatorMap({1 = "Inmobiliaria\Bundle\ApiBundle\Entity\Property\House", 
 *                        2 = "Inmobiliaria\Bundle\ApiBundle\Entity\Property\Apartment", 
 *                        3 = "Inmobiliaria\Bundle\ApiBundle\Entity\Property\Ph", 
 *                        4 = "Inmobiliaria\Bundle\ApiBundle\Entity\Property\StoreHouse", 
 *                        5 = "Inmobiliaria\Bundle\ApiBundle\Entity\Property\Loft", 
 *                        6 = "Inmobiliaria\Bundle\ApiBundle\Entity\Property\Commercial", 
 *                        7 = "Inmobiliaria\Bundle\ApiBundle\Entity\Property\Allotment", 
 *                        8 = "Inmobiliaria\Bundle\ApiBundle\Entity\Property\CountryHouse" })
 */
abstract class Property
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="properties")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * */
    protected $user;

    /**
     * @ORM\OneToMany(targetEntity="Operation", mappedBy="property")
     * */
    protected $operations;

    /**
     * @ORM\OneToMany(targetEntity="PropertyImage", mappedBy="property")
     * */
    protected $images;

    /**
     * @ORM\Column(type="datetime", name="created_at") 
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="datetime", name="updated_at") 
     * */
    protected $updatedAt;

    /**
     * @ORM\Column(type="string", length=100)
     * */
    protected $postcode;

    /**
     * @ORM\Column(type="string", length=100)
     * */
    protected $address;

    /**
     * @ORM\Column(type="text")
     * */
    protected $description;

    /**
     * @ORM\Column(type="integer")
     * */
    protected $age;

    /**
     * @ORM\Column(type="integer")
     * */
    protected $rooms;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * */
    protected $uncoveredArea;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * */
    protected $coveredArea;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * */
    protected $totalArea;

    /**
     * @ORM\Column(type="boolean")
     * */
    protected $credit;

    /**
     * @ORM\Column(type="boolean")
     * */
    protected $financing;

    /**
     * @ORM\Column(type="text", name="json_attributes", nullable=true)
     * */
    protected $jsonAttributes;

    public function __construct()
    {
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
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
     * @return Property
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
     * @return Property
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
     * @return Property
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
     * @return Property
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
     * @return Property
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
     * @return Property
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
     * @return Property
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
     * @return Property
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
     * @return Property
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
     * @return Property
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
     * @return Property
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
     * @return Property
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
     * @return Property
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
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\User $user
     * @return Property
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
     * Add operations
     *
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\Operation $operations
     * @return Property
     */
    public function addOperation(\Inmobiliaria\Bundle\ApiBundle\Entity\Operation $operations)
    {
        $this->operations[] = $operations;

        return $this;
    }

    /**
     * Remove operations
     *
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\Operation $operations
     */
    public function removeOperation(\Inmobiliaria\Bundle\ApiBundle\Entity\Operation $operations)
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
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\PropertyImage $images
     * @return Property
     */
    public function addImage(\Inmobiliaria\Bundle\ApiBundle\Entity\PropertyImage $images)
    {
        $this->images[] = $images;

        return $this;
    }

    /**
     * Remove images
     *
     * @param \Inmobiliaria\Bundle\ApiBundle\Entity\PropertyImage $images
     */
    public function removeImage(\Inmobiliaria\Bundle\ApiBundle\Entity\PropertyImage $images)
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
