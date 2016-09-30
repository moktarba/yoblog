<?php
namespace Blog\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

use Blog\BlogBundle\Entity\Post;
use Blog\BlogBundle\Entity\Category;
use Blog\BlogBundle\Entity\User;


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
        $post1 = new Post();
        $post1->setTitle('A day with Symfony2');
        $post1->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
        $post1->setImage('https://pixabay.com/static/uploads/photo/2016/05/25/01/36/frogs-1413787__180.jpg');
        $post1->setUser('dsyph3r');
        $post1->setPublished('yes');
        $post1->setCreatedAt(new \DateTime());
        $post1->setUpdatedAt($post1->getCreatedAt());
        $manager->persist($post1);

        $post2 = new Post();
        $post2->setTitle('The pool on the roof must have a leak');
        $post2->setDescription('Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Na. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis.');
        $post2->setImage('https://pixabay.com/static/uploads/photo/2016/04/28/18/37/search-engine-optimization-1359429__180.jpg');
        $post2->setUser('Zero Cool');
        $post2->setPublished('yes');
        $post2->setCreatedAt(new \DateTime("2011-07-23 06:12:33"));
        $post2->setUpdatedAt($post2->getCreatedAt());
        $manager->persist($post2);

        $post3 = new Post();
        $post3->setTitle('Misdirection. What the eyes see and the ears hear, the mind believes');
        $post3->setDescription('Lorem ipsumvehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $post3->setImage('https://pixabay.com/static/uploads/photo/2016/04/16/00/46/chicken-1332294__180.jpg');
        $post3->setUser('Gabriel');
        $post3->setPublished('yes');
        $post3->setCreatedAt(new \DateTime("2011-07-16 16:14:06"));
        $post3->setUpdatedAt($post3->getCreatedAt());
        $manager->persist($post3);

        $post4 = new Post();
        $post4->setTitle('The grid - A digital frontier');
        $post4->setDescription('Lorem commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
        $post4->setImage('https://pixabay.com/static/uploads/photo/2015/06/10/08/02/well-804583__180.jpg');
        $post4->setUser('Kevin Flynn');
        $post4->setPublished('yes');
        $post4->setCreatedAt(new \DateTime("2011-06-02 18:54:12"));
        $post4->setUpdatedAt($post4->getCreatedAt());
        $manager->persist($post4);

        $post5 = new Post();
        $post5->setTitle('You\'re either a one or a zero. Alive or dead');
        $post5->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elittibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $post5->setImage('https://pixabay.com/static/uploads/photo/2016/05/06/19/11/fixing-1376475__180.jpg');
        $post5->setUser('Gary Winston');
        $post5->setPublished('yes');
        $post5->setCreatedAt(new \DateTime("2011-04-25 15:34:18"));
        $post5->setUpdatedAt($post5->getCreatedAt());
        $manager->persist($post5);

				$manager->flush();

				$this->addReference('post1', $post1);
				$this->addReference('post2', $post2);
				$this->addReference('post3', $post3);
				$this->addReference('post4', $post4);
				$this->addReference('post5', $post5);


		public function getOrder()
		{
				// the order in which fixtures will be loaded
				// the lower the number, the sooner that this fixture is loaded
				return 5;
		}

    }

}
