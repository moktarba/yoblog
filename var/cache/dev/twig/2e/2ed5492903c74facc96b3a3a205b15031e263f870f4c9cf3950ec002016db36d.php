<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_0572029803e5b1b4f37efedb30353e69d284b482aefa98d336ae33eb53780804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aaf89ac689ba547cc92224066e013e11dfea04f281e3c95355d9e880dfd5d032 = $this->env->getExtension("native_profiler");
        $__internal_aaf89ac689ba547cc92224066e013e11dfea04f281e3c95355d9e880dfd5d032->enter($__internal_aaf89ac689ba547cc92224066e013e11dfea04f281e3c95355d9e880dfd5d032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaf89ac689ba547cc92224066e013e11dfea04f281e3c95355d9e880dfd5d032->leave($__internal_aaf89ac689ba547cc92224066e013e11dfea04f281e3c95355d9e880dfd5d032_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d589afebf4450d58d65eda7a21d0dbdcb30198bd02adee28a6b080bdb125fd09 = $this->env->getExtension("native_profiler");
        $__internal_d589afebf4450d58d65eda7a21d0dbdcb30198bd02adee28a6b080bdb125fd09->enter($__internal_d589afebf4450d58d65eda7a21d0dbdcb30198bd02adee28a6b080bdb125fd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_d589afebf4450d58d65eda7a21d0dbdcb30198bd02adee28a6b080bdb125fd09->leave($__internal_d589afebf4450d58d65eda7a21d0dbdcb30198bd02adee28a6b080bdb125fd09_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
