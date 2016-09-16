<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_b4ce84517ee3340c467c979baab5a9ad5b91e29f202ac51e6330946a5530c654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_a02f6635c95e25ae9090d113679cc410e75fff743bb0fad79f210584d28637e1 = $this->env->getExtension("native_profiler");
        $__internal_a02f6635c95e25ae9090d113679cc410e75fff743bb0fad79f210584d28637e1->enter($__internal_a02f6635c95e25ae9090d113679cc410e75fff743bb0fad79f210584d28637e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a02f6635c95e25ae9090d113679cc410e75fff743bb0fad79f210584d28637e1->leave($__internal_a02f6635c95e25ae9090d113679cc410e75fff743bb0fad79f210584d28637e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ab11a0db450090268237afbc1b3b3d9d9e4d3dcd33586e80c83afcf76db72d8 = $this->env->getExtension("native_profiler");
        $__internal_5ab11a0db450090268237afbc1b3b3d9d9e4d3dcd33586e80c83afcf76db72d8->enter($__internal_5ab11a0db450090268237afbc1b3b3d9d9e4d3dcd33586e80c83afcf76db72d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_5ab11a0db450090268237afbc1b3b3d9d9e4d3dcd33586e80c83afcf76db72d8->leave($__internal_5ab11a0db450090268237afbc1b3b3d9d9e4d3dcd33586e80c83afcf76db72d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
