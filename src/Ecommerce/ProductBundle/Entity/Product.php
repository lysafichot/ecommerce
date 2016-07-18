<?php

namespace Ecommerce\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Ecommerce\ProductBundle\Repository\ProductRepository")
 * @ORM\Table(name="products")
 * @UniqueEntity(fields="name", message="Name is already in use")
 */
class Product
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
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     */
    private $summary;

    /**
     * @ORM\Column(type="integer", length=11)
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
    * @ORM\ManyToMany(targetEntity="Ecommerce\ProductBundle\Entity\Category", inversedBy="products_cat", cascade={"persist"})
    * @ORM\JoinTable(name="product_category")
    */
    private $categories;

    /**
    * @ORM\OneToMany(targetEntity="Ecommerce\ProductBundle\Entity\ProductDerived", mappedBy="product", cascade={"persist"})
    */
    private $productsDerived;

    public function __construct()
    {
        $this->createdAt = new \Datetime();
        $this->updatedAt = new \Datetime();
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();

        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->productsDerived = new \Doctrine\Common\Collections\ArrayCollection();


    }

    public function addProductsDerived(ProductDerived $productDerived = null)
    {
        $this->productsDerived[] = $productDerived;

        return $this;
    }
  public function setProductsDerived($productDerived = null)
    {
        $this->productsDerived = $productDerived;

        return $this;
    }
    public function removeProductsDerived(ProductDerived $productDerived)
    {
        $this->productsDerived ->removeElement($productDerived);
    }

    public function getProductsDerived()
    {
        return $this->productsDerived;
    }

    public function addCategory(Category $category = null)
    {
        $this->categories[] = $category;

        return $this;
    }

    public function removeCategory(Category $category)
    {
        $this->categories->removeElement($category);
    }
    public function setCategories(Category $category)
    {
        $this->categories = $category;
    }
    public function getCategories()
    {
        return $this->categories;
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
     * Set name
     *
     * @param string $name
     * @return Products
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Products
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return Products
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Products
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
     * @return Product
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
     * @return Product
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

    public function __toString() {
        return strval($this->getId());
    }
}
