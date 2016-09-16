<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7f06fa9c2640ee30463be39f56687c6463367935b1339b59a6294b11adfef50e extends Twig_Template
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
        $__internal_8dc024d5a7542a0985a8382252bf7f30b8bd290bed56a0329e8eb3ba9fe0073a = $this->env->getExtension("native_profiler");
        $__internal_8dc024d5a7542a0985a8382252bf7f30b8bd290bed56a0329e8eb3ba9fe0073a->enter($__internal_8dc024d5a7542a0985a8382252bf7f30b8bd290bed56a0329e8eb3ba9fe0073a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8dc024d5a7542a0985a8382252bf7f30b8bd290bed56a0329e8eb3ba9fe0073a->leave($__internal_8dc024d5a7542a0985a8382252bf7f30b8bd290bed56a0329e8eb3ba9fe0073a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
