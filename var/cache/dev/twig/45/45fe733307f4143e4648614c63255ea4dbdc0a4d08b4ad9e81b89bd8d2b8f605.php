<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_894af00a82fee65933d4879953e002183a08382976eb09ad600908af74eb1b80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fdd2e78fa25cf2641799329df3881be90273d031ff821413d77fd497ce479084 = $this->env->getExtension("native_profiler");
        $__internal_fdd2e78fa25cf2641799329df3881be90273d031ff821413d77fd497ce479084->enter($__internal_fdd2e78fa25cf2641799329df3881be90273d031ff821413d77fd497ce479084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdd2e78fa25cf2641799329df3881be90273d031ff821413d77fd497ce479084->leave($__internal_fdd2e78fa25cf2641799329df3881be90273d031ff821413d77fd497ce479084_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_efa02f1650ac3237a10a361e4f8479efa29a43a2f5ec07e2f9604cca0588d6ac = $this->env->getExtension("native_profiler");
        $__internal_efa02f1650ac3237a10a361e4f8479efa29a43a2f5ec07e2f9604cca0588d6ac->enter($__internal_efa02f1650ac3237a10a361e4f8479efa29a43a2f5ec07e2f9604cca0588d6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_efa02f1650ac3237a10a361e4f8479efa29a43a2f5ec07e2f9604cca0588d6ac->leave($__internal_efa02f1650ac3237a10a361e4f8479efa29a43a2f5ec07e2f9604cca0588d6ac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_52238161eb412bdcb4ea837d8e88a13c6f38b37fc81ae0381327098d97e51635 = $this->env->getExtension("native_profiler");
        $__internal_52238161eb412bdcb4ea837d8e88a13c6f38b37fc81ae0381327098d97e51635->enter($__internal_52238161eb412bdcb4ea837d8e88a13c6f38b37fc81ae0381327098d97e51635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_52238161eb412bdcb4ea837d8e88a13c6f38b37fc81ae0381327098d97e51635->leave($__internal_52238161eb412bdcb4ea837d8e88a13c6f38b37fc81ae0381327098d97e51635_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb39845742aadc334eeeff32806cb870b3ee86517919dff7ca244dae874bcafc = $this->env->getExtension("native_profiler");
        $__internal_fb39845742aadc334eeeff32806cb870b3ee86517919dff7ca244dae874bcafc->enter($__internal_fb39845742aadc334eeeff32806cb870b3ee86517919dff7ca244dae874bcafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fb39845742aadc334eeeff32806cb870b3ee86517919dff7ca244dae874bcafc->leave($__internal_fb39845742aadc334eeeff32806cb870b3ee86517919dff7ca244dae874bcafc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
