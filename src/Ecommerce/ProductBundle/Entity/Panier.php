<?php

namespace Ecommerce\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="paniers")
 * @ORM\Entity(repositoryClass="Ecommerce\ProductBundle\Repository\PanierRepository")
 */
class Panier
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
     * @var int
     *
     * @ORM\Column(name="productDerived_id", type="integer")
     */
    private $productDerived_id;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var int
     *
     * @ORM\Column(name="pack", type="integer")
     */
    private $pack;

     /**
     * @ORM\Column(type="datetime")
     */
     private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

  /**
    * @ORM\ManyToOne(targetEntity="Ecommerce\ProductBundle\Entity\Commande", inversedBy="paniers", cascade={"persist"})
    * @ORM\JoinTable(name="paniers")
    * @ORM\JoinColumn(name="commande_id", referencedColumnName="id", onDelete="cascade")
    */
   private $commande;

   public function __construct()
   {
    $this->createdAt = new \Datetime();
    $this->updatedAt = new \Datetime();

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
     * Set quantity
     *
     * @param integer $quantity
     * @return Panier
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set pack
     *
     * @param integer $pack
     * @return Panier
     */
    public function setPack($pack)
    {
        $this->pack = $pack;

        return $this;
    }

    /**
     * Get pack
     *
     * @return integer
     */
    public function getPack()
    {
        return $this->pack;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Panier
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
     * @return Panier
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


    public function setProductDerivedId($productDerivedId)
    {
        $this->productDerived_id = $productDerivedId;

        return $this;
    }

    /**
     * Get productsDerived
     *
     * @return \Ecommerce\ProductBundle\Entity\ProductDerived
     */
    public function getProductDerivedId()
    {
        return $this->productDerived_id;
    }

    /**
     * Set commande
     *
     * @param \Ecommerce\ProductBundle\Entity\Commande $commande
     * @return Panier
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
