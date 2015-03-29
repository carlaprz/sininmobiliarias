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
     * @ORM\OneToMany(targetEntity="User", mappedBy="images")
     **/
    protected $user;
}
