<?php

namespace Ecommerce\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Ecommerce\ProductBundle\Repository\FeatureValueRepository")
 * @ORM\Table(name="feature_values")
 */
class FeatureValue
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
    private $value;

    /**
    * @ORM\ManyToOne(targetEntity="Ecommerce\ProductBundle\Entity\FeatureName", inversedBy="featureValues")
    * @ORM\JoinTable(name="feature_values")
    * @ORM\JoinColumn(name="featureName_id", referencedColumnName="id", onDelete="cascade")
    */
    private $featureName;

    /**
    * @ORM\ManyToMany(targetEntity="ProductDerived", inversedBy="featureValues", cascade={"persist"})
    * @ORM\JoinTable(name="derived_values")
    * @ORM\JoinColumn(name="productDerived_id", referencedColumnName="id", onDelete="cascade", nullable=false)
    */
    private $productDerived;





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
     * Set value
     *
     * @param string $value
     * @return FeatureValue
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set featureName
     *
     * @param \Ecommerce\ProductBundle\Entity\FeatureName $featureName
     * @return FeatureValue
     */
    public function setFeatureName(\Ecommerce\ProductBundle\Entity\FeatureName $featureName = null)
    {
        $this->featureName = $featureName;

        return $this;
    }

    /**
     * Get featureName
     *
     * @return \Ecommerce\ProductBundle\Entity\FeatureName
     */
    public function getFeatureName()
    {
        return $this->featureName;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productDeriveds = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add productDeriveds
     *
     * @param \Ecommerce\ProductBundle\Entity\ProductDerived $productDeriveds
     * @return FeatureValue
     */
    public function addProductDerived(\Ecommerce\ProductBundle\Entity\ProductDerived $productDeriveds)
    {
        $this->productDeriveds[] = $productDeriveds;

        return $this;
    }

    /**
     * Remove productDeriveds
     *
     * @param \Ecommerce\ProductBundle\Entity\ProductDerived $productDeriveds
     */
    public function removeProductDerived(\Ecommerce\ProductBundle\Entity\ProductDerived $productDeriveds)
    {
        $this->productDeriveds->removeElement($productDeriveds);
    }

    /**
     * Get productDeriveds
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductDeriveds()
    {
        return $this->productDeriveds;
    }

    /**
     * Get productDerived
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductDerived()
    {
        return $this->productDerived;
    }
}
