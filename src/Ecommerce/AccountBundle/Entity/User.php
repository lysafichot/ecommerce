<?php

namespace Ecommerce\AccountBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Ecommerce\AccountBundle\Repository\UserRepository")
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     */
    private $firstname;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $civilite;

  /**
   * @ORM\OneToOne(targetEntity="Accounts", cascade={"persist", "merge", "remove"})
   * @ORM\JoinColumn(name="account_id", referencedColumnName="id", nullable=true)
   */
  private $account;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="datetimetz", nullable=true)
     */
    private $birthday;
  /**
   * @ORM\OneToOne(targetEntity="Ecommerce\ProductBundle\Entity\Commande", cascade={"persist", "merge", "remove"})
   * @ORM\JoinColumn(name="commande_id", referencedColumnName="id", nullable=true)
   */
    private $commande;



       public function __construct() {


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
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return User
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set civilite
     *
     * @param string $civilite
     * @return User
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return string
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set account
     *
     * @param \Ecommerce\AccountBundle\Entity\Accounts $account
     * @return User
     */
    public function setAccount(\Ecommerce\AccountBundle\Entity\Accounts $account = null)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return \Ecommerce\AccountBundle\Entity\Accounts
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set commande
     *
     * @param \Ecommerce\ProductBundle\Entity\Commande $commande
     * @return User
     */
    public function setCommande(\Ecommerce\ProductBundle\Entity\Commande $commande = null)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \Ecommerce\ProductBundle\Entity\Commande
     */
    public function getCommande()
    {
        return $this->commande;
    }
}
