<?php
namespace Ecommerce\ProductBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\ProductBundle\Entity\ProductDerived;

class LoadProductDerived extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {
      //product

    $productDerived = new ProductDerived;
    $productDerived->setNameDerived( 'ASUS G752VT-GC037T');
    $productDerived->setPrice(999.88);
    $productDerived->setWeight(0.700);
    $productDerived->setProduct($this->getReference('product1'));

    $productDerived->setStatus(1);

    $manager->persist($productDerived);

    $productDerived2 = new ProductDerived;
    $productDerived2->setNameDerived( 'ASUS ZenBook Pro UX501JW-CN484T');
   $productDerived2->setPrice(1999.88);
    $productDerived2->setWeight(0.900);
    $productDerived2->setProduct($this->getReference('product2'));

    $productDerived2->setStatus(1);
    $manager->persist($productDerived2);

    $productDerived3 = new ProductDerived;
    $productDerived3->setNameDerived( 'LG 49UF685V');
  $productDerived3->setPrice(2999.88);
    $productDerived3->setWeight(1.900);
$productDerived3->setProduct($this->getReference('product3'));

    $productDerived3->setStatus(1);

    $productDerived3->setStatus(1);
    $manager->persist($productDerived3);
    $manager->flush();



    $productDerived4 = new ProductDerived;
    $productDerived4->setNameDerived("SAMSUNG Galaxy S6 Edge Black");
 $productDerived4->setPrice(800);
    $productDerived4->setWeight(0.400);
$productDerived4->setProduct($this->getReference('product4'));
    $productDerived4->setStatus(1);
      $manager->persist($productDerived4);


  $productDerived5 = new ProductDerived;
    $productDerived5->setNameDerived("SAMSUNG Galaxy S6 Edge Or");
 $productDerived5->setPrice(900);
    $productDerived5->setWeight(0.500);
$productDerived5->setProduct($this->getReference('product4'));
    $productDerived5->setStatus(1);
      $manager->persist($productDerived5);


  $productDerived6 = new ProductDerived;
    $productDerived6->setNameDerived("NIKON D3300 18-55 DX VR");
 $productDerived6->setPrice(900);
    $productDerived6->setWeight(0.600);
$productDerived6->setProduct($this->getReference('product5'));
    $productDerived6->setStatus(1);
      $manager->persist($productDerived6);

    $productDerived6->setStatus(1);
      $manager->persist($productDerived6);

      $manager->flush();


      $this->addReference('productDerived', $productDerived);
      $this->addReference('productDerived2', $productDerived2);
      $this->addReference('productDerived3', $productDerived3);
      $this->addReference('productDerived4', $productDerived4);
      $this->addReference('productDerived5', $productDerived5);
      $this->addReference('productDerived6', $productDerived6);
    }

    public function getOrder() {
      return 3;
    }
  }