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
  public function load(ObjectManager $manager)
  {
  $com1 = new Comment();
  $com1->setAvatar('');
  $com1->setContent('Vestibulum vulputate mauritie vestibulum. Morbi id quam lobortis.');
  $com1->setCreatedAt(new \DateTime());
  $com1->setUpdatedAt($com1->getCreatedAt());
  $com1->setUser($user1);
  $com1->setPost($post3);
  $manager->persist($com1);


  $com2 = new Comment();
  $com2->setAvatar('');
  $com2->setContent('Vestibulum vulputate mauritie vestibulum. Morbi id quam lobortis.');
  $com2->setCreatedAt(new \DateTime());
  $com2->setUpdatedAt($com2->getCreatedAt());
  $com2->setUser($user2);
  $com2->setPost($post1);
  $manager->persist($com2);


  $com3 = new Comment();
  $com3->setAvatar('');
  $com3->setContent('Vestibulum vulputate mauritie vestibulum. Morbi id quam lobortis.');
  $com3->setCreatedAt(new \DateTime());
  $com3->setUpdatedAt($com3->getCreatedAt());
  $com3->setUser($user1);
  $com3->setPost($post3);
  $manager->persist($com3);


  $com4 = new Comment();
  $com4->setAvatar('');
  $com4->setContent('Vestibulum vulputate mauritie vestibulum. Morbi id quam lobortis.');
  $com4->setCreatedAt(new \DateTime());
  $com4->setUpdatedAt($com4->getCreatedAt());
  $com4->setUser($user4);
  $com4->setPost($post5);
  $manager->persist($com4);


  $com5 = new Comment();
  $com5->setAvatar('');
  $com5->setContent('Vestibulum vulputate mauritie vestibulum. Morbi id quam lobortis.');
  $com5->setCreatedAt(new \DateTime());
  $com5->setUpdatedAt($com5->getCreatedAt());
  $com5->setUser($use3);
  $com5->setPost($post2);
  $manager->persist($com5);

 $manager->flush();

   $this->addReference('com1', $com1);
   $this->addReference('com2', $com2);
   $this->addReference('com3', $com3);
   $this->addReference('com4', $com4);
   $this->addReference('com5', $com5);
 }

  public function getOrder()
  {
     // the order in which fixtures will be loaded
     // the lower the number, the sooner that this fixture is loaded
     return 4;
  }
  
}
