<?php

/* :blog:login.html.twig */
class __TwigTemplate_850a3ac433dc4ff1a6a8691565f0ee3b54d53c477756412b6aba01c321a85fe7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":blog:login.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1300a8d61ec355fe21001104c879b1d4843b52a7939aa37f1ee9c196a7805bf7 = $this->env->getExtension("native_profiler");
        $__internal_1300a8d61ec355fe21001104c879b1d4843b52a7939aa37f1ee9c196a7805bf7->enter($__internal_1300a8d61ec355fe21001104c879b1d4843b52a7939aa37f1ee9c196a7805bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1300a8d61ec355fe21001104c879b1d4843b52a7939aa37f1ee9c196a7805bf7->leave($__internal_1300a8d61ec355fe21001104c879b1d4843b52a7939aa37f1ee9c196a7805bf7_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_656529c4451b2181c85a76d4367e01276b35459617f250ebf10b5af5c22c6dc4 = $this->env->getExtension("native_profiler");
        $__internal_656529c4451b2181c85a76d4367e01276b35459617f250ebf10b5af5c22c6dc4->enter($__internal_656529c4451b2181c85a76d4367e01276b35459617f250ebf10b5af5c22c6dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "        ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 8
        echo "    ";
        
        $__internal_656529c4451b2181c85a76d4367e01276b35459617f250ebf10b5af5c22c6dc4->leave($__internal_656529c4451b2181c85a76d4367e01276b35459617f250ebf10b5af5c22c6dc4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ce0ec7c86d08a839d73b4f49f620d0b6ae9c769ce082db137aeaf47b5d16b8fd = $this->env->getExtension("native_profiler");
        $__internal_ce0ec7c86d08a839d73b4f49f620d0b6ae9c769ce082db137aeaf47b5d16b8fd->enter($__internal_ce0ec7c86d08a839d73b4f49f620d0b6ae9c769ce082db137aeaf47b5d16b8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "            ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
        ";
        
        $__internal_ce0ec7c86d08a839d73b4f49f620d0b6ae9c769ce082db137aeaf47b5d16b8fd->leave($__internal_ce0ec7c86d08a839d73b4f49f620d0b6ae9c769ce082db137aeaf47b5d16b8fd_prof);

    }

    public function getTemplateName()
    {
        return ":blog:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  51 => 5,  44 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/*     {% block body%}*/
/*         {% block fos_user_content %}*/
/*             {{ include('FOSUserBundle:Security:login_content.html.twig') }}*/
/*         {% endblock fos_user_content %}*/
/*     {% endblock  %}*/
