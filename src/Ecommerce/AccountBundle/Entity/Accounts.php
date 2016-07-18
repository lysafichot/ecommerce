<?php

namespace Ecommerce\AccountBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="accounts")
 * @UniqueEntity(fields="email", message="Email already taken")
 * @UniqueEntity(fields="username", message="Username already taken")
 */
class Accounts implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     */
    private $username;


    /**
     * @Assert\Length(max=4096)
     */
    private $plainPassword;

    /**
     *
     * @ORM\Column(type="string", length=64)
     */
    private $password;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $roles;

    /**
    * @ORM\OneToMany(targetEntity="Adresse", mappedBy="account", cascade={"persist"})
    */
    private $adresses;

      /**
   * @ORM\OneToOne(targetEntity="User", cascade={"persist", "merge", "remove"})
   * @ORM\JoinColumn(name="account_id", referencedColumnName="id")
   */
      private $user;

      public function __construct($id = null) {

        $this->adresses = new \Doctrine\Common\Collections\ArrayCollection();

    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getRoles()
    {
        return unserialize($this->roles);
    }
    public function setRoles(Array $roles)
    {
        $this->roles = serialize($roles);
    }
    public function eraseCredentials()
    {

    }

    public function getSalt()
    {
        return null;
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
     * Add adresses
     *
     * @param \Ecommerce\AccountBundle\Entity\Adresse $adresses
     * @return Accounts
     */
    public function addAdress(\Ecommerce\AccountBundle\Entity\Adresse $adresses)
    {
        $this->adresses[] = $adresses;

        return $this;
    }

    /**
     * Remove adresses
     *
     * @param \Ecommerce\AccountBundle\Entity\Adresse $adresses
     */
    public function removeAdress(\Ecommerce\AccountBundle\Entity\Adresse $adresses)
    {
        $this->adresses->removeElement($adresses);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdresses()
    {
        return $this->adresses;
    }



    /**
     * Set user
     *
     * @param \Ecommerce\AccountBundle\Entity\User $user
     * @return Accounts
     */
    public function setUser(\Ecommerce\AccountBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Ecommerce\AccountBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
