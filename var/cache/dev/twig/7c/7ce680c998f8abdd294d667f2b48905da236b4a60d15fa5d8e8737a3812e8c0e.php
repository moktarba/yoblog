<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_a83c30f88711ff26d273adabf05a621a895f3d680cc6278cfa476cce15fddbaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_3a5ea6ddeb5872399eaba1f07f0e17d6b755471cc7b6457a0089c37a9f475457 = $this->env->getExtension("native_profiler");
        $__internal_3a5ea6ddeb5872399eaba1f07f0e17d6b755471cc7b6457a0089c37a9f475457->enter($__internal_3a5ea6ddeb5872399eaba1f07f0e17d6b755471cc7b6457a0089c37a9f475457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a5ea6ddeb5872399eaba1f07f0e17d6b755471cc7b6457a0089c37a9f475457->leave($__internal_3a5ea6ddeb5872399eaba1f07f0e17d6b755471cc7b6457a0089c37a9f475457_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8df8ed15d6b12e4a4ea173275fffedb68a03546c03772aa478d4610122450bb = $this->env->getExtension("native_profiler");
        $__internal_c8df8ed15d6b12e4a4ea173275fffedb68a03546c03772aa478d4610122450bb->enter($__internal_c8df8ed15d6b12e4a4ea173275fffedb68a03546c03772aa478d4610122450bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_c8df8ed15d6b12e4a4ea173275fffedb68a03546c03772aa478d4610122450bb->leave($__internal_c8df8ed15d6b12e4a4ea173275fffedb68a03546c03772aa478d4610122450bb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
