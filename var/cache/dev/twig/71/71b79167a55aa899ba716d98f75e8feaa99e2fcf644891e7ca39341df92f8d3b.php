<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_b0991c23fec91795c58dbc8677614387fd70a872ac33dd402a79d2723759b08d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_68d06018235c84a4b1be9c33f72421b101e15655ca62177b58e17c687a34d46f = $this->env->getExtension("native_profiler");
        $__internal_68d06018235c84a4b1be9c33f72421b101e15655ca62177b58e17c687a34d46f->enter($__internal_68d06018235c84a4b1be9c33f72421b101e15655ca62177b58e17c687a34d46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68d06018235c84a4b1be9c33f72421b101e15655ca62177b58e17c687a34d46f->leave($__internal_68d06018235c84a4b1be9c33f72421b101e15655ca62177b58e17c687a34d46f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6bece1ff864a9931a33bb00964c4861bd6b8ab33909b4de633b0d842c9445ebc = $this->env->getExtension("native_profiler");
        $__internal_6bece1ff864a9931a33bb00964c4861bd6b8ab33909b4de633b0d842c9445ebc->enter($__internal_6bece1ff864a9931a33bb00964c4861bd6b8ab33909b4de633b0d842c9445ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_6bece1ff864a9931a33bb00964c4861bd6b8ab33909b4de633b0d842c9445ebc->leave($__internal_6bece1ff864a9931a33bb00964c4861bd6b8ab33909b4de633b0d842c9445ebc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
