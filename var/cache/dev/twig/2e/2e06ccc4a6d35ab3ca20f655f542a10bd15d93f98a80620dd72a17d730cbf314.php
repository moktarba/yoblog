<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_6fea3064352f998a935b0475987d3c30a6db03e27c01c78520e6a89fd9b5b0d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_b05cf8e85613cafcba6441580e4d8d4638e04820c5f0817f44d61a81430f72fc = $this->env->getExtension("native_profiler");
        $__internal_b05cf8e85613cafcba6441580e4d8d4638e04820c5f0817f44d61a81430f72fc->enter($__internal_b05cf8e85613cafcba6441580e4d8d4638e04820c5f0817f44d61a81430f72fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b05cf8e85613cafcba6441580e4d8d4638e04820c5f0817f44d61a81430f72fc->leave($__internal_b05cf8e85613cafcba6441580e4d8d4638e04820c5f0817f44d61a81430f72fc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_850aff1a2797a1443a29e251eb331e7e610a7758f064ec16327709a77e209b5d = $this->env->getExtension("native_profiler");
        $__internal_850aff1a2797a1443a29e251eb331e7e610a7758f064ec16327709a77e209b5d->enter($__internal_850aff1a2797a1443a29e251eb331e7e610a7758f064ec16327709a77e209b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_850aff1a2797a1443a29e251eb331e7e610a7758f064ec16327709a77e209b5d->leave($__internal_850aff1a2797a1443a29e251eb331e7e610a7758f064ec16327709a77e209b5d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:change_password_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
