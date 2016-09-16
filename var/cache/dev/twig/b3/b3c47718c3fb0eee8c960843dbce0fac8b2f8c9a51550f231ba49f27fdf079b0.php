<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5f2e369804dd7196986bd966b33303778f296668d5cd505382588de94d7e2499 extends Twig_Template
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
        $__internal_df025d943d4d5b67057abd5aa52d7b91442257650e876d3d58c742684e6c6f16 = $this->env->getExtension("native_profiler");
        $__internal_df025d943d4d5b67057abd5aa52d7b91442257650e876d3d58c742684e6c6f16->enter($__internal_df025d943d4d5b67057abd5aa52d7b91442257650e876d3d58c742684e6c6f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_df025d943d4d5b67057abd5aa52d7b91442257650e876d3d58c742684e6c6f16->leave($__internal_df025d943d4d5b67057abd5aa52d7b91442257650e876d3d58c742684e6c6f16_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
