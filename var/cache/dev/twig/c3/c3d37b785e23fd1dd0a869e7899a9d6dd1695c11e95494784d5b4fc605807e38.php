<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_87addf2e0cc648f39a3b9ea9033ac8cc40cf06797bd9bd5ce1390510e2618e33 extends Twig_Template
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
        $__internal_5a4ce4f3dc14b196782cb5676d89160986d0a81315ec2ab11e86fe6b9ca2c9ed = $this->env->getExtension("native_profiler");
        $__internal_5a4ce4f3dc14b196782cb5676d89160986d0a81315ec2ab11e86fe6b9ca2c9ed->enter($__internal_5a4ce4f3dc14b196782cb5676d89160986d0a81315ec2ab11e86fe6b9ca2c9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5a4ce4f3dc14b196782cb5676d89160986d0a81315ec2ab11e86fe6b9ca2c9ed->leave($__internal_5a4ce4f3dc14b196782cb5676d89160986d0a81315ec2ab11e86fe6b9ca2c9ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
