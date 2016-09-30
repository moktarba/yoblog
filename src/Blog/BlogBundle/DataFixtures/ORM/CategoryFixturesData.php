<?php
namespace Blog\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

use Blog\BlogBundle\Entity;

class CategoryFixturesData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface
{
  public function load(ObjectManager $manager)
  {
     // Fixtures for categories
    $cat1 = new Category();
    $cat1->setName('HighTech');
    $cat1->setDescription('Vestibulum vulputate mauritie vestibulum. Morbi id quam lobortis.');
    $cat1->setCreatedAt(new \DateTime());
    $cat1->setUpdatedAt($cat1->getCreatedAt());
    $cat1->setUser($user1);

    $manager->persist($cat1);

    $cat2 = new Category();
    $cat2->setName('Infos');
    $cat2->setDescription('Vest xcibulumxc xc vulputatecfsdfdf xccxc fffdfdf scc vestibulum. Morbi id quam lobortis.');
    $cat2->setCreatedAt(new \DateTime());
    $cat2->setUpdatedAt($cat2->getCreatedAt());
    $cat2->setUser($user1);
    $manager->persist($cat2);

    $cat3 = new Category();
    $cat3->setName('Politique à la con');
    $cat3->setDescription('Vestibulum vxwxcxc ulputate mwxwxw wxwauritie vestibulum.bcv cdfdqfdefd  Morbi id quam lobortis.');
    $cat3->setCreatedAt(new \DateTime());
    $cat3->setUpdatedAt($cat3->getCreatedAt());$cat3->setUser($admin);
    $manager->persist($cat3);

    $cat4 = new Category();
    $cat4->setName('Voitures');
    $cat4->setDescription('Vestibulum dfdfdfdf vulputate mauritie dfdfdfdf vestibulum. Morbi id quam lobortis.');
    $cat4->setCreatedAt(new \DateTime());
    $cat4->setUpdatedAt($cat4->getCreatedAt());$cat4->setUser($admin);
    $manager->persist($cat4);

    $cat5 = new Category();
    $cat5->setName('Chaudières');
    $cat5->setDescription('Vestibulum vulputate defef mauritie vestibulum. Morbi id quam lobortis.');
    $cat5->setCreatedAt(new \DateTime());
    $cat5->setUpdatedAt($cat5->getCreatedAt());$cat5->setUser($admin);
    $manager->persist($cat5);

     $manager->flush();

     $this->addReference('cat1', $cat1);
     $this->addReference('cat2', $cat2);
     $this->addReference('cat3', $cat3);
     $this->addReference('cat4', $cat4);
     $this->addReference('cat5', $cat5);
   }

   public function getOrder()
   {
       // the order in which fixtures will be loaded
       // the lower the number, the sooner that this fixture is loaded
       return 2;
   }

}
