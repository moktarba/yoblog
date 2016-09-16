<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c9d405c96cb28dcc2c11cc40938e29122cd23609a90d0e59d0569af72b0b5ae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_5a6ebe151192452672cb60f63736ed9f1695c0679ff1a2740102bb1f21ffa660 = $this->env->getExtension("native_profiler");
        $__internal_5a6ebe151192452672cb60f63736ed9f1695c0679ff1a2740102bb1f21ffa660->enter($__internal_5a6ebe151192452672cb60f63736ed9f1695c0679ff1a2740102bb1f21ffa660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a6ebe151192452672cb60f63736ed9f1695c0679ff1a2740102bb1f21ffa660->leave($__internal_5a6ebe151192452672cb60f63736ed9f1695c0679ff1a2740102bb1f21ffa660_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebf2303101163f50a339d1ed8b14e2a1e9c04c138f741d8a9b58c9a5154c56be = $this->env->getExtension("native_profiler");
        $__internal_ebf2303101163f50a339d1ed8b14e2a1e9c04c138f741d8a9b58c9a5154c56be->enter($__internal_ebf2303101163f50a339d1ed8b14e2a1e9c04c138f741d8a9b58c9a5154c56be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_ebf2303101163f50a339d1ed8b14e2a1e9c04c138f741d8a9b58c9a5154c56be->leave($__internal_ebf2303101163f50a339d1ed8b14e2a1e9c04c138f741d8a9b58c9a5154c56be_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
