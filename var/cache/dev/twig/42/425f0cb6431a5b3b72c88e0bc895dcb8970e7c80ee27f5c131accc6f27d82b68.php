<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_bdf79b651f39580322509cfedb5f3618aee4ecbc476c5a4e8095b8268ff57069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d888f445386c2798057606efa4e6cd032d2a34dbf99a9a2ebbfe6a521abce6f6 = $this->env->getExtension("native_profiler");
        $__internal_d888f445386c2798057606efa4e6cd032d2a34dbf99a9a2ebbfe6a521abce6f6->enter($__internal_d888f445386c2798057606efa4e6cd032d2a34dbf99a9a2ebbfe6a521abce6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_d888f445386c2798057606efa4e6cd032d2a34dbf99a9a2ebbfe6a521abce6f6->leave($__internal_d888f445386c2798057606efa4e6cd032d2a34dbf99a9a2ebbfe6a521abce6f6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
