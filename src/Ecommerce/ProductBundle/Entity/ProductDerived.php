<?php

namespace Ecommerce\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="Ecommerce\ProductBundle\Repository\ProductDerivedRepository")
 * @ORM\Table(name="products_derived")
 * @UniqueEntity(fields="nameDerived", message="Name is already in use")
 */
class ProductDerived
{


      /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
      private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nameDerived;

    /**
     * @ORM\Column(type="float", length=255)
     */
    private $price;

    /**
     * @ORM\Column(type="float", length=255)
     */
    private $weight;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $status;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
    * @ORM\ManyToOne(targetEntity="Ecommerce\ProductBundle\Entity\Product", inversedBy="productsDerived", cascade={"persist"})
    * @ORM\JoinTable(name="products_derived")
    * @ORM\JoinColumn(name="product_id", referencedColumnName="id", onDelete="cascade")
    */
    private $product;

    /**
    * @ORM\OneToMany(targetEntity="Media", mappedBy="productDerived", cascade={"persist"})
    */
    private $medias;

    /**
    * @ORM\ManyToMany(targetEntity="FeatureValue", mappedBy="productDerived", cascade={"persist"})
    * @ORM\JoinTable(name="deriveds_values")
    * @ORM\JoinColumn(name="value_id", referencedColumnName="id", onDelete="cascade", nullable=false)
    */
    private $featureValues;



    public function __construct()
    {
        $this->createdAt = new \Datetime();
        $this->updatedAt = new \Datetime();
        $this->medias = new \Doctrine\Common\Collections\ArrayCollection();
        $this->featureValues = new \Doctrine\Common\Collections\ArrayCollection();

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
     * Set nameDerived
     *
     * @param string $nameDerived
     * @return ProductDerived
     */
    public function setNameDerived($nameDerived)
    {
        $this->nameDerived = $nameDerived;

        return $this;
    }

    /**
     * Get nameDerived
     *
     * @return string
     */
    public function getNameDerived()
    {
        return $this->nameDerived;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return ProductDerived
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set weight
     *
     * @param float $weight
     * @return ProductDerived
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return ProductDerived
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ProductDerived
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
     * @return ProductDerived
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
     * Add medias
     *
     * @param \Ecommerce\ProductBundle\Entity\Media $medias
     * @return ProductDerived
     */
    public function addMedia(\Ecommerce\ProductBundle\Entity\Media $medias)
    {
        $this->medias[] = $medias;

        return $this;
    }

    public function setMedias($medias)
    {
        $this->medias = $medias;

        return $this;
    }

    /**
     * Remove medias
     *
     * @param \Ecommerce\ProductBundle\Entity\Media $medias
     */
    public function removeMedia(\Ecommerce\ProductBundle\Entity\Media $medias)
    {
        $this->medias->removeElement($medias);
    }

    /**
     * Get medias
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedias()
    {
        return $this->medias;
    }


    /**
     * Set product
     *
     * @param \Ecommerce\ProductBundle\Entity\Product $product
     * @return ProductDerived
     */
    public function setProduct(\Ecommerce\ProductBundle\Entity\Product $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Ecommerce\ProductBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Add featureValues
     *
     * @param \Ecommerce\ProductBundle\Entity\FeatureValue $featureValues
     * @return ProductDerived
     */
    public function addFeatureValue(\Ecommerce\ProductBundle\Entity\FeatureValue $featureValues)
    {
        $this->featureValues[] = $featureValues;

        return $this;
    }

    /**
     * Remove featureValues
     *
     * @param \Ecommerce\ProductBundle\Entity\FeatureValue $featureValues
     */
    public function removeFeatureValue(\Ecommerce\ProductBundle\Entity\FeatureValue $featureValues)
    {
        $this->featureValues->removeElement($featureValues);
    }

    /**
     * Get featureValues
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFeatureValues()
    {
        return $this->featureValues;
    }

    /**
     * Add panier
     *
     * @param \Ecommerce\ProductBundle\Entity\Panier $panier
     * @return ProductDerived
     */
    public function addPanier(\Ecommerce\ProductBundle\Entity\Panier $panier)
    {
        $this->panier[] = $panier;

        return $this;
    }

    /**
     * Remove panier
     *
     * @param \Ecommerce\ProductBundle\Entity\Panier $panier
     */
    public function removePanier(\Ecommerce\ProductBundle\Entity\Panier $panier)
    {
        $this->panier->removeElement($panier);
    }

    /**
     * Get panier
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPanier()
    {
        return $this->panier;
    }
      public function __toString()
    {
        return strval($this->getId());
    }
}
