<?php
namespace Ecommerce\ProductBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\ProductBundle\Entity\Media;

class LoadMedia extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {

    $media = new Media();
    $media->setPath('fixtures/swatch.png');
    $media->setFilename('cat1');
    $media->setType('image/png');
    $media->setCategory($this->getReference('category'));

    $manager->persist($media);

    $media2 = new media;
    $media2->setPath('fixtures/apple.png');
    $media2->setFilename('cat2');
    $media2->setType('image/png');
    $media2->setCategory($this->getReference('category2'));



    $manager->persist($media2);

    $media3 = new media;
    $media3->setPath('fixtures/tel.png');
    $media3->setFilename('cat3');
    $media3->setType('image/png');
    $media3->setCategory($this->getReference('category3'));



    $manager->persist($media3);
    $manager->flush();

    $media4 = new media;
    $media4->setPath('fixtures/tv4.png');
    $media4->setFilename('cat4');
    $media4->setType('image/png');
    $media4->setCategory($this->getReference('category4'));

    $manager->persist($media4);

    $media5 = new media;
    $media5->setPath('fixtures/ordi.png');
    $media5->setFilename('cat5');
    $media5->setType('image/png');
    $media5->setCategory($this->getReference('category5'));

    $manager->persist($media5);

    $manager->flush();






    $media6 = new Media;
    $media6->setPath('fixtures/ordinateur.png');
    $media6->setFilename('asus');
    $media6->setType('image/png');
    $media6->setProductDerived($this->getReference('productDerived'));
    $manager->persist($media6);

    $manager->flush();

    $media7 = new media;
    $media7->setPath('fixtures/asus3.png');
    $media7->setFilename('asus1');
    $media7->setType('image/png');
    $media7->setProductDerived($this->getReference('productDerived2'));
    $manager->persist($media7);
    $manager->flush();

    $media8 = new media;
    $media8->setPath('fixtures/tv7.png');
    $media8->setFilename('tv');
    $media8->setType('image/png');
    $media8->setProductDerived($this->getReference('productDerived3'));
    $manager->persist($media8);
    $manager->flush();


    $media9 = new media;
    $media9->setPath('fixtures/samsung_noir.png');
    $media9->setFilename('galaxis_noir');
    $media9->setType('image/png');
    $media9->setProductDerived($this->getReference('productDerived4'));
    $manager->persist($media9);
    $manager->flush();


    $media10 = new media;
    $media10->setPath('fixtures/Samsung.png');
    $media10->setFilename('galaxis');
    $media10->setType('image/png');
    $media10->setProductDerived($this->getReference('productDerived5'));
    $manager->persist($media10);
    $manager->flush();

    $media11 = new media;
    $media11->setPath('fixtures/tv8.png');
    $media11->setFilename('nikon');
    $media11->setType('image/png');
    $media11->setProductDerived($this->getReference('productDerived6'));
    $manager->persist($media11);
    $manager->flush();

  }
  public function getOrder() {
    return 4;
  }
}