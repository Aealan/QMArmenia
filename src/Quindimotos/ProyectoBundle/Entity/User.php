<?php
namespace Quindimotos\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User Entity
 *
 * @ORM\Entity( repositoryClass="Quindimotos\ProyectoBundle\Entity\Repository\UserRepository" )
 * @ORM\Table( name="security_users" )
 * 
 * @author James Morris <james@jmoz.co.uk>
 * @package SecurityBundle
 */
class User extends BaseUser
{ 
   
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

   /**
     * @ORM\ManyToMany(targetEntity="Role")
     * @ORM\JoinTable(name="security_users_roles",
     *  joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id")}
     * )
     */
    
   
     protected $roles;
         
     /**
     *NOTA: LA VARIABLE rolesc se la mando a registratioFromType.php para que este me cree el formulario a partir de los datos de db
     * creo esta variable para evitar conflictos con roles y poder realizar registro de usuarios con su respectivo rol
     * ademas estoy utilizando orm para cargar los datos desde la datebase y realizar las relaciones respectivas 
     */
     /**
     * @ORM\ManyToMany(targetEntity="Role")
     * @ORM\JoinTable(name="security_users_roles",
     *  joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id")}
     * )
     */ 
    
     public $rolesc;
   
    
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $username;
     /**
     * @ORM\Column(type="string", length=255)
     */
    protected $usernameCanonical;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $emailCanonical;

    /**
     * @ORM\Column(name="eneable", type="boolean")
     */
    protected $enabled;
    
    /**
     * The salt to use for hashing
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $salt;

    /**
     * Encrypted password. Must be persisted.
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $password;

    /**
     * Plain password. Used for model validation. Must not be persisted.
     *
     * @var string
     */
    protected $plainPassword;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $lastLogin;
    
    /**
     * @ORM\Column(name="locked", type="boolean")
     */
    protected $locked;

    /**
     * @ORM\Column(name="expired", type="boolean")
     */
    protected $expired;

    /**
     * @ORM\Column(name="expires_At", type="datetime")
     */
    protected $expiresAt;

    
    /**
     * Random string sent to the user email address in order to verify it
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $confirmationToken;
    
    

    /**
     * @ORM\Column(name="$password_Requested_At", type="datetime")
     */
    protected $passwordRequestedAt;


    /**
     * @ORM\Column(name="$credentialsExpired", type="boolean")
     */
    protected $credentialsExpired;

    /**
     * @ORM\Column(name="$credentials_Expire_At", type="datetime")
     */
    public $credentialsExpireAt;
    
    /**
     * inicializo las variables de roles que utlizare para poder acceder al el mecanismo de seguridad de Sf2 requiere ésto como un array 
     * y poder crear usuarios en el sistema
     */
    public function __construct()
    {
         parent::__construct();
        $this->roles = new ArrayCollection();
        $this->rolesc = new ArrayCollection();
    }
    
    
    
    
   //... existing setters/getters
    
   public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getUsernameCanonical()
    {
        return $this->usernameCanonical;
    }

    public function getSalt()
    {
        return $this->salt;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getEmailCanonical()
    {
        return $this->emailCanonical;
    }

    /**
     * Gets the encrypted password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * Gets the last login time.
     *
     * @return \DateTime
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }
    
    public function getPasswordRequestedAt()
    {
        return $this->passwordRequestedAt;
    }

   public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    public function setUsernameCanonical($usernameCanonical)
    {
        $this->usernameCanonical = $usernameCanonical;

        return $this;
    }

    /**
     * @param \DateTime $date
     *
     * @return User
     */
    public function setCredentialsExpireAt(\DateTime $date)
    {
        $this->credentialsExpireAt = $date;

        return $this;
    }

    /**
     * @param boolean $boolean
     *
     * @return User
     */
    public function setCredentialsExpired($boolean)
    {
        $this->credentialsExpired = $boolean;

        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function setEmailCanonical($emailCanonical)
    {
        $this->emailCanonical = $emailCanonical;

        return $this;
    }

    public function setEnabled($boolean)
    {
        $this->enabled = (Boolean) $boolean;

        return $this;
    }

    /**
     * Sets this user to expired.
     *
     * @param Boolean $boolean
     *
     * @return User
     */
    public function setExpired($boolean)
    {
        $this->expired = (Boolean) $boolean;

        return $this;
    }

    /**
     * @param \DateTime $date
     *
     * @return User
     */
    public function setExpiresAt(\DateTime $date)
    {
        $this->expiresAt = $date;

        return $this;
    }
   

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;

        return $this;
    }

    public function setLastLogin(\DateTime $time)
    {
        $this->lastLogin = $time;

        return $this;
    }

    public function setLocked($boolean)
    {
        $this->locked = $boolean;

        return $this;
    }

    public function setConfirmationToken($confirmationToken)
    {
        $this->confirmationToken = $confirmationToken;

        return $this;
    }

    public function setPasswordRequestedAt(\DateTime $date = null)
    {
        $this->passwordRequestedAt = $date;

        return $this;
    }

    
    /**
     * *******************************************************************************************
     * *******************************************************************************************
     * *******************************************************************************************
     * *******************************************************************************************
     * *******************************************************************************************
     * *******************************************************************************************
     * 
     * Returns the true ArrayCollection of Roles.
     * @return Doctrine\Common\Collections\Collection
     */
    public function getRolesCollection()
    {
        return $this->roles;
    }
  
    
     
    public function getRoles()
    {
        
         return $this->getRolesCollection()->toArray();//este activo me deja logearme
        
    }
    
    public function  getRolesc()
    {
        $this->rolesc->toArray();//este activo me dejar registar usuarios
         
    }
    /**
     * Pass a string, get the desired Role object or null.
     * @param string $role
     * @return Role|null
     */
    public function getRole( $role )
    {
        foreach ( $this->getRoles() as $roleItem )
        {
            if ( $role == $roleItem->getRole() )
            {
                return $roleItem;
            }
        }
        return null;
    }
    
    /**
     * Pass a string, checks if we have that Role. Same functionality as getRole() except returns a real boolean.
     * @param string $role
     * @return boolean
     */
    public function hasRole( $role )
    {
        if ( $this->getRole( $role ) )
        {
            return true;
        }
        return false;
    }

    /**
     * Adds a Role OBJECT to the ArrayCollection. Can't type hint due to interface so throws Exception.
     * @throws Exception
     * @param Role $role 
     */
    public function addRole( $role )
    {
        if ( !$role instanceof Role )
        {
            throw new \Exception( "addRole takes a Role object as the parameter" );
        }
        
        if ( !$this->hasRole( $role->getRole() ) )
        {
            $this->roles->add( $role );
        }
    }
    
    /**
     * Pass a string, remove the Role object from collection.
     * @param string $role 
     */
    public function removeRole( $role )
    {
        $roleElement = $this->getRole( $role );
        if ( $roleElement )
        {
            $this->roles->removeElement( $roleElement );
        }
    }
    
    /**
     * Pass an ARRAY of Role objects and will clear the collection and re-set it with new Roles.
     * Type hinted array due to interface.
     * @param array $roles Of Role objects.
     */
    public function setRoles( array $roles )
    {
        $this->roles->clear();
        foreach ( $roles as $role )
        {
            $this->addRole( $role );
        }
    }
 
    
    /**
     * Directly set the ArrayCollection of Roles. Type hinted as Collection which is the parent of (Array|Persistent)Collection.
     * @param Doctrine\Common\Collections\Collection $role 
     */
    public function setRolesCollection( Collection $collection/*$role */)
    {
        $this->roles =$collection;// $role
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    
        return $this;
    }

    /**
     * Get locked
     *
     * @return boolean 
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Get expired
     *
     * @return boolean 
     */
    public function getExpired()
    {
        return $this->expired;
    }

    /**
     * Get expiresAt
     *
     * @return \DateTime 
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * Get credentialsExpired
     *
     * @return boolean 
     */
    public function getCredentialsExpired()
    {
        return $this->credentialsExpired;
    }

    /**
     * Get credentialsExpireAt
     *
     * @return \DateTime 
     */
    public function getCredentialsExpireAt()
    {
        return $this->credentialsExpireAt;
    }

    /**
     * Add rolesc
     *
     * @param Quindimotos\ProyectoBundle\Entity\Role $rolesc
     * @return User
     */
    public function addRolesc(\Quindimotos\ProyectoBundle\Entity\Role $rolesc)
    {
        $this->rolesc[] = $rolesc;
    
        return $this;
    }

    /**
     * Remove rolesc
     *
     * @param Quindimotos\ProyectoBundle\Entity\Role $rolesc
     */
    public function removeRolesc(\Quindimotos\ProyectoBundle\Entity\Role $rolesc)
    {
        $this->rolesc->removeElement($rolesc);
    }
}