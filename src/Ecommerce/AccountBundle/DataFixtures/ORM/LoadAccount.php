<?php
namespace Ecommerce\AccountBundle\DataFixtures\ORM;
use Symfony\Component\Security\Core\SecurityContext;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\AccountBundle\Entity\Accounts;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
      $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
      $admin = new Accounts();
      $admin->setUsername('terry');
      $encoder = $this->container->get('security.password_encoder');
      $encoded = $encoder->encodePassword($admin, 'terry');
      $admin->setPassword($encoded);
      $admin->setEmail('terry.fourge@epitech.eu');
      $admin->setRoles(['ROLE_ADMIN']);
      $manager->persist($admin);

      $admin2 = new Accounts();
      $admin2->setUsername('manon');
      $encoder = $this->container->get('security.password_encoder');
      $encoded = $encoder->encodePassword($admin2, 'manon');
      $admin2->setPassword($encoded);
      $admin2->setEmail('manon.noblet@epitech.eu');
      $admin2->setRoles(['ROLE_ADMIN']);
      $manager->persist($admin2);


      $admin3 = new Accounts();
      $admin3->setUsername('samuel');
      $encoder = $this->container->get('security.password_encoder');
      $encoded = $encoder->encodePassword($admin3, 'samuel');
      $admin3->setPassword($encoded);
      $admin3->setEmail('samuel.vilar@epitech.eu');
      $admin3->setRoles(['ROLE_ADMIN']);
      $manager->persist($admin3);

      $admin4 = new Accounts();
      $admin4->setUsername('lysa');
      $encoder = $this->container->get('security.password_encoder');
      $encoded = $encoder->encodePassword($admin4, 'lysa');
      $admin4->setPassword($encoded);
      $admin4->setEmail('lysa.fichot@epitech.eu');
      $admin4->setRoles(['ROLE_ADMIN']);
      $manager->persist($admin4);

      $user = new Accounts();
      $user->setUsername('user');
      $encoder = $this->container->get('security.password_encoder');
      $encoded = $encoder->encodePassword($user, 'user');
      $user->setPassword($encoded);
      $user->setEmail('user@epitech.eu');
      $user->setRoles(['ROLE_USER']);
      $manager->persist($user);
      $manager->flush();

    }
  }