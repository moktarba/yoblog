<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7e8e03a71bd687b9a13eda1500e04cb10d26eadfa0cece95beb996933d49980c extends Twig_Template
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
        $__internal_454aa33c9c1af0b0da99df884e365f5ce4b7d0aeb3ab1fd2254b014c0a128e8c = $this->env->getExtension("native_profiler");
        $__internal_454aa33c9c1af0b0da99df884e365f5ce4b7d0aeb3ab1fd2254b014c0a128e8c->enter($__internal_454aa33c9c1af0b0da99df884e365f5ce4b7d0aeb3ab1fd2254b014c0a128e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_454aa33c9c1af0b0da99df884e365f5ce4b7d0aeb3ab1fd2254b014c0a128e8c->leave($__internal_454aa33c9c1af0b0da99df884e365f5ce4b7d0aeb3ab1fd2254b014c0a128e8c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
