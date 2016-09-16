<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1f6aa57cc06dc2de51ca4d4208573cda51057f5ab691ef3428b1422d06587e5d extends Twig_Template
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
        $__internal_fbb813cfcefd32dbb95752903cbaed014defed731becf513b085dfc8efde657e = $this->env->getExtension("native_profiler");
        $__internal_fbb813cfcefd32dbb95752903cbaed014defed731becf513b085dfc8efde657e->enter($__internal_fbb813cfcefd32dbb95752903cbaed014defed731becf513b085dfc8efde657e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_fbb813cfcefd32dbb95752903cbaed014defed731becf513b085dfc8efde657e->leave($__internal_fbb813cfcefd32dbb95752903cbaed014defed731becf513b085dfc8efde657e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
