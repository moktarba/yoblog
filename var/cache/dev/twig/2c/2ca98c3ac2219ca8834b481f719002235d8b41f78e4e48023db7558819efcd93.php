<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_cc518441bb40236cf9b15e78db45bcaf368aa399dfdf4f5ef432502e1f200065 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_2ce2796e08f584b4b2897655c109da15fba6d5a2c970e6c46ec801a1c71c75d2 = $this->env->getExtension("native_profiler");
        $__internal_2ce2796e08f584b4b2897655c109da15fba6d5a2c970e6c46ec801a1c71c75d2->enter($__internal_2ce2796e08f584b4b2897655c109da15fba6d5a2c970e6c46ec801a1c71c75d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ce2796e08f584b4b2897655c109da15fba6d5a2c970e6c46ec801a1c71c75d2->leave($__internal_2ce2796e08f584b4b2897655c109da15fba6d5a2c970e6c46ec801a1c71c75d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9376898a128547e6b3684269d15a762c63868888f6f4e2b3d54fe7371c2d7b6d = $this->env->getExtension("native_profiler");
        $__internal_9376898a128547e6b3684269d15a762c63868888f6f4e2b3d54fe7371c2d7b6d->enter($__internal_9376898a128547e6b3684269d15a762c63868888f6f4e2b3d54fe7371c2d7b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_9376898a128547e6b3684269d15a762c63868888f6f4e2b3d54fe7371c2d7b6d->leave($__internal_9376898a128547e6b3684269d15a762c63868888f6f4e2b3d54fe7371c2d7b6d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
