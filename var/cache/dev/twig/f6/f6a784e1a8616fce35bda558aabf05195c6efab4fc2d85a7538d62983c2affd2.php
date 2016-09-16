<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_84346dd5b084781cc43d6811a595944af9a22969876dd771ed8f3a164c89132f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_01fe452b5de665bb462aab2cbcc56c7971091c1235171cb6d54db54c49d0e615 = $this->env->getExtension("native_profiler");
        $__internal_01fe452b5de665bb462aab2cbcc56c7971091c1235171cb6d54db54c49d0e615->enter($__internal_01fe452b5de665bb462aab2cbcc56c7971091c1235171cb6d54db54c49d0e615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01fe452b5de665bb462aab2cbcc56c7971091c1235171cb6d54db54c49d0e615->leave($__internal_01fe452b5de665bb462aab2cbcc56c7971091c1235171cb6d54db54c49d0e615_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_50826fd839f89e3eebb25625fc00a59c8ce14b4b44c176fed440b161e6b4cae5 = $this->env->getExtension("native_profiler");
        $__internal_50826fd839f89e3eebb25625fc00a59c8ce14b4b44c176fed440b161e6b4cae5->enter($__internal_50826fd839f89e3eebb25625fc00a59c8ce14b4b44c176fed440b161e6b4cae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_50826fd839f89e3eebb25625fc00a59c8ce14b4b44c176fed440b161e6b4cae5->leave($__internal_50826fd839f89e3eebb25625fc00a59c8ce14b4b44c176fed440b161e6b4cae5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
