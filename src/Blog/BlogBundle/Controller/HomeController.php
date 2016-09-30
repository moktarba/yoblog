<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



namespace Blog\BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Blog\BlogBundle\Entity\Post;
use Blog\BlogBundle\Entity\User;

use Blog\BlogBundle\Form\PostType;


/**
 * Post controller.
 *
 */
class HomeController extends Controller
{
    /**
     * HomePage.
     *
     */
    public function blogAction()
    {
         $em = $this->getDoctrine()->getManager();

        $posts = $em->getRepository('BlogBlogBundle:Post')->findAll();

        return $this->render('blog/home.html.twig', array(
            'posts' => $posts,
        ));

    }

    /**
     * Lists all Post entities.
     *
     */
    public function singleAction(Post $post)
    {
        return $this->render('blog/single.html.twig', array(
            'single' => $post,

        ));
    }
    /**
     * the profile
     *
     */
     public function profileAction(User $user)
     {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('BlogBlogBundle:User')->findAll();
        return $this->render('blog/profile.html.twig', array(
        'user' => $user,

        ));
     }

}
