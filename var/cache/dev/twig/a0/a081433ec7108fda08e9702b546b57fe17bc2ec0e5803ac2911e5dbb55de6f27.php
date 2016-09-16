<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_6cd61ed5e77a10bb5a03cda6b0432340dfdfad64e233cacd167da521fd3c251c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_6eeaec0fa07bfb0dd97b8311285fe4cd4b350ce0fd6a4b09775066a82002855d = $this->env->getExtension("native_profiler");
        $__internal_6eeaec0fa07bfb0dd97b8311285fe4cd4b350ce0fd6a4b09775066a82002855d->enter($__internal_6eeaec0fa07bfb0dd97b8311285fe4cd4b350ce0fd6a4b09775066a82002855d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eeaec0fa07bfb0dd97b8311285fe4cd4b350ce0fd6a4b09775066a82002855d->leave($__internal_6eeaec0fa07bfb0dd97b8311285fe4cd4b350ce0fd6a4b09775066a82002855d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2802cfc11b896bc01df4312b0feaabc60fc0b010cdb44763ab980159bd053c32 = $this->env->getExtension("native_profiler");
        $__internal_2802cfc11b896bc01df4312b0feaabc60fc0b010cdb44763ab980159bd053c32->enter($__internal_2802cfc11b896bc01df4312b0feaabc60fc0b010cdb44763ab980159bd053c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2802cfc11b896bc01df4312b0feaabc60fc0b010cdb44763ab980159bd053c32->leave($__internal_2802cfc11b896bc01df4312b0feaabc60fc0b010cdb44763ab980159bd053c32_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
