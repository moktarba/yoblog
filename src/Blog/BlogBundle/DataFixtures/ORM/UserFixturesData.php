<?php
namespace Blog\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

use Blog\BlogBundle\Entity;

class BlogFixtures extends AbstractFixture implements FixtureInterface, ContainerAwareInterface
{
    private $container;
  	public function setContainer(ContainerInterface $container = null){
  		$this->getContainer = $container;
  	}

    public function load(ObjectManager $manager)
    {

        $userManager = $this->getContainer->get('fos_user.user_manager');

         // Fixtures for users
        $user1 = $userManager->createUser();
        $user1->setUsername('Chagrin');
        $user1->setFirstname('Pierre');
        $user1->setName('Goloin');
        $user1->setEmail('pierre@matincalme.fr');
        $user1->setBio('Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Na. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis.');
        $user1->setPlainPassword('toto');
        $user1->setEnabled(true);
        $user1->setLastLogin(new \Datetime('NOW'));
        $user1->setRoles(array('ROLE_USER'));
        $user1->setImage("");
        $manager->persist($user1);

        $admin1 = $userManager->createUser();
        $admin1->setUsername('admin');
        $admin1->setFirstname('Pierre');
        $admin1->setName('Goloin');
        $admin1->setEmail('admin@bamoktar.com');
        $admin1->setBio('Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Na. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis.');
        $admin1->setPlainPassword('admin');
        $admin1->setEnabled(true);
        $admin1->setLastLogin(new \Datetime('NOW'));
        $admin1->setRoles(array('ROLE_ADMIN','ROLE_USER'));
        $admin1->setImage("");
        $manager->persist($admin1);
      }
      public function getOrder()
        {
         // the order in which fixtures will be loaded
         // the lower the number, the sooner that this fixture is loaded
         return 3;
        }

}
