<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_ea9e3ece42f6bb90f54fd0d5d281d6fd62d6f7d440e687df8d32cfcc19f492b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_4e034841181ac788a71b7c7124a743b2a8ebff626fe7789dc1e5e73220c0b04b = $this->env->getExtension("native_profiler");
        $__internal_4e034841181ac788a71b7c7124a743b2a8ebff626fe7789dc1e5e73220c0b04b->enter($__internal_4e034841181ac788a71b7c7124a743b2a8ebff626fe7789dc1e5e73220c0b04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e034841181ac788a71b7c7124a743b2a8ebff626fe7789dc1e5e73220c0b04b->leave($__internal_4e034841181ac788a71b7c7124a743b2a8ebff626fe7789dc1e5e73220c0b04b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_710a662ce126c40da5a914919e2f2f6b0d7251da7e61db8689a670694609fddd = $this->env->getExtension("native_profiler");
        $__internal_710a662ce126c40da5a914919e2f2f6b0d7251da7e61db8689a670694609fddd->enter($__internal_710a662ce126c40da5a914919e2f2f6b0d7251da7e61db8689a670694609fddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_710a662ce126c40da5a914919e2f2f6b0d7251da7e61db8689a670694609fddd->leave($__internal_710a662ce126c40da5a914919e2f2f6b0d7251da7e61db8689a670694609fddd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
