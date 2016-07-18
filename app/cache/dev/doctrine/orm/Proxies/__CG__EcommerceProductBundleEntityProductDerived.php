<?php

namespace Proxies\__CG__\Ecommerce\ProductBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ProductDerived extends \Ecommerce\ProductBundle\Entity\ProductDerived implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Ecommerce\\ProductBundle\\Entity\\ProductDerived' . "\0" . 'id', '' . "\0" . 'Ecommerce\\ProductBundle\\Entity\\ProductDerived' . "\0" . 'nameDerived', '' . "\0" . 'Ecommerce\\ProductBundle\\Entity\\ProductDerived' . "\0" . 'price', '' . "\0" . 'Ecommerce\\ProductBundle\\Entity\\ProductDerived' . "\0" . 'weight', '' . "\0" . 'Ecommerce\\ProductBundle\\Entity\\ProductDerived' . "\0" . 'status', '' . "\0" . 'Ecommerce\\ProductBundle\\Entity\\ProductDerived' . "\0" . 'createdAt', '' . "\0" . 'Ecommerce\\ProductBundle\\Entity\\ProductDerived' . "\0" . 'updatedAt', '' . "\0" . 'Ecommerce\\ProductBundle\\Entity\\ProductDerived' . "\0" . 'product', '' . "\0" . 'Ecommerce\\ProductBundle\\Entity\\ProductDerived' . "\0" . 'medias', '' . "\0" . 'Ecommerce\\ProductBundle\\Entity\\ProductDerived' . "\0" . 'featureValues');
        }

        return array('__isInitialized__', '' . "\0" . 'Ecommerce\\ProductBundle\\Entity\\ProductDerived' . "\0" . 'id', '' . "\0" . 'Ecommerce\\ProductBundle\\Entity\\ProductDerived' . "\0" . 'nameDerived', '' . "\0" . 'Ecommerce\\ProductBundle\\Entity\\ProductDerived' . "\0" . 'price', '' . "\0" . 'Ecommerce\\ProductBundle\\Entity\\ProductDerived' . "\0" . 'weight', '' . "\0" . 'Ecommerce\\ProductBundle\\Entity\\ProductDerived' . "\0" . 'status', '' . "\0" . 'Ecommerce\\ProductBundle\\Entity\\ProductDerived' . "\0" . 'createdAt', '' . "\0" . 'Ecommerce\\ProductBundle\\Entity\\ProductDerived' . "\0" . 'updatedAt', '' . "\0" . 'Ecommerce\\ProductBundle\\Entity\\ProductDerived' . "\0" . 'product', '' . "\0" . 'Ecommerce\\ProductBundle\\Entity\\ProductDerived' . "\0" . 'medias', '' . "\0" . 'Ecommerce\\ProductBundle\\Entity\\ProductDerived' . "\0" . 'featureValues');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ProductDerived $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNameDerived($nameDerived)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNameDerived', array($nameDerived));

        return parent::setNameDerived($nameDerived);
    }

    /**
     * {@inheritDoc}
     */
    public function getNameDerived()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNameDerived', array());

        return parent::getNameDerived();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice($price)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', array($price));

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', array());

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setWeight($weight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWeight', array($weight));

        return parent::setWeight($weight);
    }

    /**
     * {@inheritDoc}
     */
    public function getWeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWeight', array());

        return parent::getWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', array($status));

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', array());

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($createdAt));

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array($updatedAt));

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function addMedia(\Ecommerce\ProductBundle\Entity\Media $medias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMedia', array($medias));

        return parent::addMedia($medias);
    }

    /**
     * {@inheritDoc}
     */
    public function setMedias($medias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMedias', array($medias));

        return parent::setMedias($medias);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMedia(\Ecommerce\ProductBundle\Entity\Media $medias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMedia', array($medias));

        return parent::removeMedia($medias);
    }

    /**
     * {@inheritDoc}
     */
    public function getMedias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMedias', array());

        return parent::getMedias();
    }

    /**
     * {@inheritDoc}
     */
    public function setProduct(\Ecommerce\ProductBundle\Entity\Product $product)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProduct', array($product));

        return parent::setProduct($product);
    }

    /**
     * {@inheritDoc}
     */
    public function getProduct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduct', array());

        return parent::getProduct();
    }

    /**
     * {@inheritDoc}
     */
    public function addFeatureValue(\Ecommerce\ProductBundle\Entity\FeatureValue $featureValues)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFeatureValue', array($featureValues));

        return parent::addFeatureValue($featureValues);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFeatureValue(\Ecommerce\ProductBundle\Entity\FeatureValue $featureValues)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFeatureValue', array($featureValues));

        return parent::removeFeatureValue($featureValues);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeatureValues()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeatureValues', array());

        return parent::getFeatureValues();
    }

    /**
     * {@inheritDoc}
     */
    public function addPanier(\Ecommerce\ProductBundle\Entity\Panier $panier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPanier', array($panier));

        return parent::addPanier($panier);
    }

    /**
     * {@inheritDoc}
     */
    public function removePanier(\Ecommerce\ProductBundle\Entity\Panier $panier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePanier', array($panier));

        return parent::removePanier($panier);
    }

    /**
     * {@inheritDoc}
     */
    public function getPanier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPanier', array());

        return parent::getPanier();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
