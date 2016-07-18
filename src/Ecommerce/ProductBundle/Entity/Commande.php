<?php

namespace Ecommerce\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commandes")
 * @ORM\Entity(repositoryClass="Ecommerce\ProductBundle\Repository\CommandeRepository")
 */
class Commande
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
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
    * @ORM\ManyToOne(targetEntity="Ecommerce\AccountBundle\Entity\Adresse", inversedBy="commandes")
    * @ORM\JoinTable(name="commandes")
    * @ORM\JoinColumn(name="adresse_id", referencedColumnName="id", onDelete="cascade")
    */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="package", type="string", length=255)
     */
    private $package = false;

   /**
    * @ORM\OneToMany(targetEntity="Ecommerce\ProductBundle\Entity\Panier", mappedBy="commande")
    */
    private $paniers;

     /**
     *
     * @ORM\Column(name="shopped", type="boolean")
     */
    private $shopped =false;

    public function __construct()
    {
        $this->createdAt = new \Datetime();
        $this->updatedAt = new \Datetime();
        $this->paniers = new \Doctrine\Common\Collections\ArrayCollection();

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
     * @return Commande
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
     * @return Commande
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
     * Set account
     *
     * @param string $account
     * @return Commande
     */
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set panier
     *
     * @param string $panier
     * @return Commande
     */
    public function setPanier($panier)
    {
        $this->panier = $panier;

        return $this;
    }

    /**
     * Get panier
     *
     * @return string
     */
    public function getPanier()
    {
        return $this->panier;
    }

    /**
     * Set package
     *
     * @param string $package
     * @return Commande
     */
    public function setPackage($package)
    {
        $this->package = $package;

        return $this;
    }

    /**
     * Get package
     *
     * @return string
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Add paniers
     *
     * @param \Ecommerce\ProductBundle\Entity\Panier $paniers
     * @return Commande
     */
    public function addPanier(\Ecommerce\ProductBundle\Entity\Panier $paniers)
    {
        $this->paniers[] = $paniers;

        return $this;
    }

    /**
     * Remove paniers
     *
     * @param \Ecommerce\ProductBundle\Entity\Panier $paniers
     */
    public function removePanier(\Ecommerce\ProductBundle\Entity\Panier $paniers)
    {
        $this->paniers->removeElement($paniers);
    }

    /**
     * Get paniers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPaniers()
    {
        return $this->paniers;
    }

    /**
     * Set adresse
     *
     * @param \Ecommerce\AccountBundle\Entity\Adresse $adresse
     * @return Commande
     */
    public function setAdresse(\Ecommerce\AccountBundle\Entity\Adresse $adresse = null)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return \Ecommerce\AccountBundle\Entity\Adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set shopped
     *
     * @param boolean $shopped
     * @return Commande
     */
    public function setShopped($shopped)
    {
        $this->shopped = $shopped;
    
        return $this;
    }

    /**
     * Get shopped
     *
     * @return boolean 
     */
    public function getShopped()
    {
        return $this->shopped;
    }
}
