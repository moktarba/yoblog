<?php

/* :user:new.html.twig */
class __TwigTemplate_2ba351cdc5f4f85f2692c5eec3b36cda12cc1159874c5e1b7c176c133212e76e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_638625250f0cb0c030844181ad632293754bd08208e468f3ae52ec8fc563c46a = $this->env->getExtension("native_profiler");
        $__internal_638625250f0cb0c030844181ad632293754bd08208e468f3ae52ec8fc563c46a->enter($__internal_638625250f0cb0c030844181ad632293754bd08208e468f3ae52ec8fc563c46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_638625250f0cb0c030844181ad632293754bd08208e468f3ae52ec8fc563c46a->leave($__internal_638625250f0cb0c030844181ad632293754bd08208e468f3ae52ec8fc563c46a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47575fa2486c2b55335d3482c4ea4ea77603ae5269eef4ae6b6b34b9efd9fc5a = $this->env->getExtension("native_profiler");
        $__internal_47575fa2486c2b55335d3482c4ea4ea77603ae5269eef4ae6b6b34b9efd9fc5a->enter($__internal_47575fa2486c2b55335d3482c4ea4ea77603ae5269eef4ae6b6b34b9efd9fc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_47575fa2486c2b55335d3482c4ea4ea77603ae5269eef4ae6b6b34b9efd9fc5a->leave($__internal_47575fa2486c2b55335d3482c4ea4ea77603ae5269eef4ae6b6b34b9efd9fc5a_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
