<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_f487fa2e06a8746d22dcd1dcca5232b89f3ad8c4e0de63f4bb957de175821de3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_c4df645c0cc42d454e155857a0f280dae9709348d96462fb8b8d5fe969808c05 = $this->env->getExtension("native_profiler");
        $__internal_c4df645c0cc42d454e155857a0f280dae9709348d96462fb8b8d5fe969808c05->enter($__internal_c4df645c0cc42d454e155857a0f280dae9709348d96462fb8b8d5fe969808c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4df645c0cc42d454e155857a0f280dae9709348d96462fb8b8d5fe969808c05->leave($__internal_c4df645c0cc42d454e155857a0f280dae9709348d96462fb8b8d5fe969808c05_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11f72daa0aa90100b0648a220be6acdc7198cfe8755507b69549f00cbb480158 = $this->env->getExtension("native_profiler");
        $__internal_11f72daa0aa90100b0648a220be6acdc7198cfe8755507b69549f00cbb480158->enter($__internal_11f72daa0aa90100b0648a220be6acdc7198cfe8755507b69549f00cbb480158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_11f72daa0aa90100b0648a220be6acdc7198cfe8755507b69549f00cbb480158->leave($__internal_11f72daa0aa90100b0648a220be6acdc7198cfe8755507b69549f00cbb480158_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
