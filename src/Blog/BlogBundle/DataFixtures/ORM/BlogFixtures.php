<?php
namespace Blog\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Blog\BlogBundle\Entity\Post;


class BlogFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $userManager = $this->getContainer->get('fos_user.user_manager');
 /*       
         // Fixtures for categories
        $cat1 = new Category();
        $cat1->setName('HighTech');
        $cat1->setDescription('Vestibulum vulputate mauritie vestibulum. Morbi id quam lobortis.');
        $cat1->setCreatedAt(new \DateTime());
        $cat1->setUpdatedAt($cat1->getCreatedAt());
        $manager->persist($cat1);
        /*
        $cat2 = new Category();
        $cat2->setName('Infos');
        $cat2->setDescription('Vest xcibulumxc xc vulputatecfsdfdf xccxc fffdfdf scc vestibulum. Morbi id quam lobortis.');
        $cat2->setCreatedAt(new \DateTime());
        $cat2->setUpdatedAt($cat2->getCreatedAt());
        $manager->persist($cat2);
        
        $cat3 = new Category();
        $cat3->setName('Politique à la con');
        $cat3->setDescription('Vestibulum vxwxcxc ulputate mwxwxw wxwauritie vestibulum.bcv cdfdqfdefd  Morbi id quam lobortis.');
        $cat3->setCreatedAt(new \DateTime());
        $cat3->setUpdatedAt($cat3->getCreatedAt());
        $manager->persist($cat3);
        
        $cat4 = new Category();
        $cat4->setName('Voitures');
        $cat4->setDescription('Vestibulum dfdfdfdf vulputate mauritie dfdfdfdf vestibulum. Morbi id quam lobortis.');
        $cat4->setCreatedAt(new \DateTime());
        $cat4->setUpdatedAt($cat4->getCreatedAt());
        $manager->persist($cat4);
        
        $cat5 = new Category();
        $cat5->setUserName('Chaudières');
        $cat5->setDescription('Vestibulum vulputate defef mauritie vestibulum. Morbi id quam lobortis.');
        $cat5->setCreatedAt(new \DateTime());
        $cat5->setUpdatedAt($cat5->getCreatedAt());
        $manager->persist($cat5);
        
      */  
         // Fixtures for users
        $user1 = $userManager->createUser();
        $user1->setUsername('Chagrin');
        //$user1->setFirstname('Pierre');
        $user1->setEmail('pierre@matincalme.fr');
        //$user1->setBio('Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Na. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis.');
        $user1->setPlainPassword('toto');
        //$user1->setRoles('admin');
        $user1->setFirstname('Kaka');
        $user1->setEnabled(true);
        $user1->setLastLogin(new \Datetime('NOW'));
        $user1->setRoles(array('ROLE_USER'));
        $user1->setBio("Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500");
        $user1->setAvatar('avatar.jpg');
        $manager->persist($user1);

        $admin = $userManager->createUser();
        $admin->setUsername('admin');
        $admin->setEmail('admin@iknsa.com');
        $admin->setPlainPassword('admin');
        $admin->setEnabled(true);
        $admin->setLastLogin(new \Datetime('NOW'));
        $admin->setRoles(array('ROLE_ADMIN','ROLE_USER'));
        $manager->persist($admin);
        
        // Fixtures for posts
        $blog1 = new Post();
        $blog1->setTitle('A day with Symfony2');
        $blog1->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
        $blog1->setImage('https://pixabay.com/static/uploads/photo/2016/05/25/01/36/frogs-1413787__180.jpg');
        $blog1->setUser('dsyph3r');
        $blog1->setPublished('yes');
        $blog1->setCreatedAt(new \DateTime());
        $blog1->setUpdatedAt($blog1->getCreatedAt());
        $manager->persist($blog1);

        $blog2 = new Post();
        $blog2->setTitle('The pool on the roof must have a leak');
        $blog2->setDescription('Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Na. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis.');
        $blog2->setImage('https://pixabay.com/static/uploads/photo/2016/04/28/18/37/search-engine-optimization-1359429__180.jpg');
        $blog2->setUser('Zero Cool');
        $blog2->setPublished('yes');
        $blog2->setCreatedAt(new \DateTime("2011-07-23 06:12:33"));
        $blog2->setUpdatedAt($blog2->getCreatedAt());
        $manager->persist($blog2);

        $blog3 = new Post();
        $blog3->setTitle('Misdirection. What the eyes see and the ears hear, the mind believes');
        $blog3->setDescription('Lorem ipsumvehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $blog3->setImage('https://pixabay.com/static/uploads/photo/2016/04/16/00/46/chicken-1332294__180.jpg');
        $blog3->setUser('Gabriel');
        $blog3->setPublished('yes');
        $blog3->setCreatedAt(new \DateTime("2011-07-16 16:14:06"));
        $blog3->setUpdatedAt($blog3->getCreatedAt());
        $manager->persist($blog3);

        $blog4 = new Post();
        $blog4->setTitle('The grid - A digital frontier');
        $blog4->setDescription('Lorem commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
        $blog4->setImage('https://pixabay.com/static/uploads/photo/2015/06/10/08/02/well-804583__180.jpg');
        $blog4->setUser('Kevin Flynn');
        $blog4->setPublished('yes');
        $blog4->setCreatedAt(new \DateTime("2011-06-02 18:54:12"));
        $blog4->setUpdatedAt($blog4->getCreatedAt());
        $manager->persist($blog4);

        $blog5 = new Post();
        $blog5->setTitle('You\'re either a one or a zero. Alive or dead');
        $blog5->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elittibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $blog5->setImage('https://pixabay.com/static/uploads/photo/2016/05/06/19/11/fixing-1376475__180.jpg');
        $blog5->setUser('Gary Winston');
        $blog5->setPublished('yes');
        $blog5->setCreatedAt(new \DateTime("2011-04-25 15:34:18"));
        $blog5->setUpdatedAt($blog5->getCreatedAt());
        $manager->persist($blog5);

        $manager->flush();
    }

}