<?php


namespace Quindimotos\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\RoleInterface;

/**
 * Role Entity
 *
 * @ORM\Entity
 * @ORM\Table( name="security_roles" )
 * 
 * @author James Morris <james@jmoz.co.uk>
 * 
 */
class Role implements RoleInterface
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="id")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", name="role", unique=true, length=70)
     */
    protected $role;

    /**
     * Populate the role field
     * @param string $role ROLE_FOO etc
     *
    public function __construct( $role )
    {
        $this->role = $role;
    }

    /**
     * Return the role field.
     * @return string 
     */
   
    public function setRole($role)
    {
        $this->role = $role;
    }
    
    public function getRole()
    {
        return $this->role;
    }
     /**
     * Get id
     *
     * @return integer
     
     public function  getid()
    {
        return $this->id;
    }
      * 
      */

    /**
     * Return the role field.
     * @return string 
     */
    public function __toString()
    {
        return (string) $this->role;
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
}