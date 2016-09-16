<?php

/* FOSUserBundle:Resetting:password_already_requested.html.twig */
class __TwigTemplate_40a7f970aacc8d5d0687f50b1d0dbf044a7c795fc539f1a5b0b1ccfced085989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:password_already_requested.html.twig", 1);
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
        $__internal_050e8161b8337f93ac1bfdeee11f4f6c6399797fafee3058b797f2594c23012d = $this->env->getExtension("native_profiler");
        $__internal_050e8161b8337f93ac1bfdeee11f4f6c6399797fafee3058b797f2594c23012d->enter($__internal_050e8161b8337f93ac1bfdeee11f4f6c6399797fafee3058b797f2594c23012d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_050e8161b8337f93ac1bfdeee11f4f6c6399797fafee3058b797f2594c23012d->leave($__internal_050e8161b8337f93ac1bfdeee11f4f6c6399797fafee3058b797f2594c23012d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_608159c9bf2c93e452477743db5f5860c950717c2adff82e8da39c40cca872cf = $this->env->getExtension("native_profiler");
        $__internal_608159c9bf2c93e452477743db5f5860c950717c2adff82e8da39c40cca872cf->enter($__internal_608159c9bf2c93e452477743db5f5860c950717c2adff82e8da39c40cca872cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_608159c9bf2c93e452477743db5f5860c950717c2adff82e8da39c40cca872cf->leave($__internal_608159c9bf2c93e452477743db5f5860c950717c2adff82e8da39c40cca872cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:password_already_requested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
