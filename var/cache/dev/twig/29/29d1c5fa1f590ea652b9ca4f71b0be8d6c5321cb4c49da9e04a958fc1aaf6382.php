<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_dde2662ec33737133dca31b281e311234eb07d979504f6ed381105147cc8bf18 extends Twig_Template
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
        $__internal_95c51a74586ebe248c8d47344f16271662866b1e9bcd8e279d519e6d2449e463 = $this->env->getExtension("native_profiler");
        $__internal_95c51a74586ebe248c8d47344f16271662866b1e9bcd8e279d519e6d2449e463->enter($__internal_95c51a74586ebe248c8d47344f16271662866b1e9bcd8e279d519e6d2449e463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_95c51a74586ebe248c8d47344f16271662866b1e9bcd8e279d519e6d2449e463->leave($__internal_95c51a74586ebe248c8d47344f16271662866b1e9bcd8e279d519e6d2449e463_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */