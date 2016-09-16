<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a7c1b4c34ef27f7e63bcc9a151b1e66f7e0ba09c2bc2a470c12402374c486ecd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_56297aba21aa3d191b4108f0c9983572402e483185aa751491561789cba66e9b = $this->env->getExtension("native_profiler");
        $__internal_56297aba21aa3d191b4108f0c9983572402e483185aa751491561789cba66e9b->enter($__internal_56297aba21aa3d191b4108f0c9983572402e483185aa751491561789cba66e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56297aba21aa3d191b4108f0c9983572402e483185aa751491561789cba66e9b->leave($__internal_56297aba21aa3d191b4108f0c9983572402e483185aa751491561789cba66e9b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05c4f8098800232efcabcd7b891aaf0d719c31ab5f5129e95bc635482ea0448c = $this->env->getExtension("native_profiler");
        $__internal_05c4f8098800232efcabcd7b891aaf0d719c31ab5f5129e95bc635482ea0448c->enter($__internal_05c4f8098800232efcabcd7b891aaf0d719c31ab5f5129e95bc635482ea0448c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_05c4f8098800232efcabcd7b891aaf0d719c31ab5f5129e95bc635482ea0448c->leave($__internal_05c4f8098800232efcabcd7b891aaf0d719c31ab5f5129e95bc635482ea0448c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
