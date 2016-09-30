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
      img1 = new Image();
      img1->setPath('');
      img1->setName('Vestibulum');
      $manager->persist(img1);

      img2 = new Image();
      img2->setPath('');
      img2->setName('Vestibulum');
      $manager->persist(img2);

      img3 = new Image();
      img3->setPath('');
      img3->setName('Vestibulum');
      $manager->persist(img3);

      img4 = new Image();
      img4->setPath('');
      img4->setName('Vestibulum');
      $manager->persist(img4);

      img5 = new Image();
      img5->setPath('');
      img5->setName('Vestibulum');
      $manager->persist(img5);


      $manager->flush();

       $this->addReference('img1', $img1);
       $this->addReference('img2', $img2);
       $this->addReference('img3', $img3);
       $this->addReference('img4', $img4);
       $this->addReference('img5', $img5);
     }

    public function getOrder()
      {
       // the order in which fixtures will be loaded
       // the lower the number, the sooner that this fixture is loaded
       return 1;
      }
  }
