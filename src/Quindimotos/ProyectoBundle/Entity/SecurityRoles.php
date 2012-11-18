<?php

namespace Quindimotos\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quindimotos\ProyectoBundle\Entity\SecurityRoles
 *
 * @ORM\Table(name="security_roles")
 * @ORM\Entity
 */
class SecurityRoles
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $role
     *
     * @ORM\Column(name="role", type="string", length=70, nullable=false)
     */
    private $role;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="SecurityUsers", mappedBy="role")
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set role
     *
     * @param string $role
     * @return SecurityRoles
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Add user
     *
     * @param Quindimotos\ProyectoBundle\Entity\SecurityUsers $user
     * @return SecurityRoles
     */
    public function addUser(\Quindimotos\ProyectoBundle\Entity\SecurityUsers $user)
    {
        $this->user[] = $user;
    
        return $this;
    }

    /**
     * Remove user
     *
     * @param Quindimotos\ProyectoBundle\Entity\SecurityUsers $user
     */
    public function removeUser(\Quindimotos\ProyectoBundle\Entity\SecurityUsers $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }
}