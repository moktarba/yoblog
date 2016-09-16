<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_6622581d5bac8d0e9e16aa504a00cd91619b9ebb2dfa8e7cbdd62b3b86fce73e extends Twig_Template
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
        $__internal_51a36ffaf9e600daa949e1de6e8e0217617ddfbeb2983c24661361ab3cdcc3a8 = $this->env->getExtension("native_profiler");
        $__internal_51a36ffaf9e600daa949e1de6e8e0217617ddfbeb2983c24661361ab3cdcc3a8->enter($__internal_51a36ffaf9e600daa949e1de6e8e0217617ddfbeb2983c24661361ab3cdcc3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_51a36ffaf9e600daa949e1de6e8e0217617ddfbeb2983c24661361ab3cdcc3a8->leave($__internal_51a36ffaf9e600daa949e1de6e8e0217617ddfbeb2983c24661361ab3cdcc3a8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
