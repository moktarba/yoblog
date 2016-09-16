<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_b57e3ea473ce8d85d1917e5c18f99b93c5f092333ca9d90cf535286fc146a454 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_fc7ba8aaa2bfb103783819ffbc209667877424be96f54fee03870bd68492e7eb = $this->env->getExtension("native_profiler");
        $__internal_fc7ba8aaa2bfb103783819ffbc209667877424be96f54fee03870bd68492e7eb->enter($__internal_fc7ba8aaa2bfb103783819ffbc209667877424be96f54fee03870bd68492e7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc7ba8aaa2bfb103783819ffbc209667877424be96f54fee03870bd68492e7eb->leave($__internal_fc7ba8aaa2bfb103783819ffbc209667877424be96f54fee03870bd68492e7eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a80565f99d0cb68239c9403ddf30abd73163c7687f75b241a605d954d3f3634c = $this->env->getExtension("native_profiler");
        $__internal_a80565f99d0cb68239c9403ddf30abd73163c7687f75b241a605d954d3f3634c->enter($__internal_a80565f99d0cb68239c9403ddf30abd73163c7687f75b241a605d954d3f3634c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a80565f99d0cb68239c9403ddf30abd73163c7687f75b241a605d954d3f3634c->leave($__internal_a80565f99d0cb68239c9403ddf30abd73163c7687f75b241a605d954d3f3634c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
