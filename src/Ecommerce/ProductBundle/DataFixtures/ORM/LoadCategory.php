<?php
namespace Ecommerce\ProductBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\ProductBundle\Entity\Category;

class LoadCategory extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {
      //CATEGORY

    $category = new Category;
    $category->setName( 'Montre');
    $category->setPreview(true);

    $manager->persist($category);

    $category2 = new Category;
    $category2->setName( 'Telephone');
    $category2->setPreview(true);

    $manager->persist($category2);

    $category3 = new Category;
    $category3->setName( 'TV');
    $category3->setPreview(true);
    $manager->persist($category3);

    $manager->flush();

    $category6 = new Category;
    $category6->setName( 'Appareil photo');
    $manager->persist($category6);

    $manager->flush();


    $category7 = new Category;
    $category7->setName( 'PC');
    $manager->persist($category7);

    $manager->flush();
      //SOUS CATEGORY

    $category4 = new Category;
    $category4->setName( 'Smartphone');
      $category4->setIdParent($category2->getId()); //voir pour eviter brut sinon truncate
      $manager->persist($category4);

      $category5 = new Category;
      $category5->setName( 'TV 3d');
      $category5->setIdParent($category3->getId());
      $manager->persist($category5);

      $manager->flush();


      $this->addReference('category', $category);
      $this->addReference('category2', $category2);
      $this->addReference('category3', $category3);
      $this->addReference('category4', $category4);
      $this->addReference('category5', $category5);
      $this->addReference('category6', $category6);
      $this->addReference('category7', $category7);


    }

    public function getOrder() {
      return 1;
    }
  }