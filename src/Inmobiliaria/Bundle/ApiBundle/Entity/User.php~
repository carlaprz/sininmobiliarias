<?php
namespace Inmobiliaria\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use DateTime;

/**
 * @ORM\Entity(repositoryClass="Inmobiliaria\Bundle\ApiBundle\Repository\UserRepository")
 * @ORM\Table(name="user")
 */
class User
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\OneToMany(targetEntity="Property", mappedBy="user")
     **/
    protected $properties;

    /**
     * @ORM\OneToMany(targetEntity="Operation", mappedBy="user")
     **/
    protected $operations;
    
    /**
     * @ORM\OneToMany(targetEntity="UserImage", mappedBy="user")
     **/
    protected $images;

    /**
     * @ORM\Column(type="datetime", name="created_at") 
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="datetime", name="updated_at") 
     */
    protected $updatedAt;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=100, name="last_name")
     */
    protected $lastName;

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     */
    protected $username;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $password;

    /**
     * @ORM\Column(type="datetime", name="date_of_birth")
     **/
    protected $dateOfBirth;

    public function __construct()
    {
        $this->property = new ArrayCollection();
        $this->operation = new ArrayCollection();
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }

}
