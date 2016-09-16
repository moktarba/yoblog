<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_82908eeda62810a5b761122eaed120187ad711303069feba917815264a0bc6b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_99f8f1ba4e51023733259370f4dee0aebcd4d874fc452f299a208c87dfbb171b = $this->env->getExtension("native_profiler");
        $__internal_99f8f1ba4e51023733259370f4dee0aebcd4d874fc452f299a208c87dfbb171b->enter($__internal_99f8f1ba4e51023733259370f4dee0aebcd4d874fc452f299a208c87dfbb171b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99f8f1ba4e51023733259370f4dee0aebcd4d874fc452f299a208c87dfbb171b->leave($__internal_99f8f1ba4e51023733259370f4dee0aebcd4d874fc452f299a208c87dfbb171b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a8541f3221b2de7b83995ad7278cd59c9c70b2c812e345fc626f88ec0288cfc = $this->env->getExtension("native_profiler");
        $__internal_2a8541f3221b2de7b83995ad7278cd59c9c70b2c812e345fc626f88ec0288cfc->enter($__internal_2a8541f3221b2de7b83995ad7278cd59c9c70b2c812e345fc626f88ec0288cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_2a8541f3221b2de7b83995ad7278cd59c9c70b2c812e345fc626f88ec0288cfc->leave($__internal_2a8541f3221b2de7b83995ad7278cd59c9c70b2c812e345fc626f88ec0288cfc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
/*     {{ include('FOSUserBundle:Security:login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
