<?php

/* :post:new.html.twig */
class __TwigTemplate_c4c19f8ed7eaf56ee6d20b65919f17d2f5d60ac5ce063e50c33aec307b10da28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":post:new.html.twig", 1);
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
        $__internal_d54f937049ca2ce67e7731de39a7efd74f0481090a4f894b08fc9286d3330e7f = $this->env->getExtension("native_profiler");
        $__internal_d54f937049ca2ce67e7731de39a7efd74f0481090a4f894b08fc9286d3330e7f->enter($__internal_d54f937049ca2ce67e7731de39a7efd74f0481090a4f894b08fc9286d3330e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d54f937049ca2ce67e7731de39a7efd74f0481090a4f894b08fc9286d3330e7f->leave($__internal_d54f937049ca2ce67e7731de39a7efd74f0481090a4f894b08fc9286d3330e7f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a10d218d237a3828f076432e12420fa1c0dcdbe0ebfb457c9bf4f3e0356b529 = $this->env->getExtension("native_profiler");
        $__internal_6a10d218d237a3828f076432e12420fa1c0dcdbe0ebfb457c9bf4f3e0356b529->enter($__internal_6a10d218d237a3828f076432e12420fa1c0dcdbe0ebfb457c9bf4f3e0356b529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6a10d218d237a3828f076432e12420fa1c0dcdbe0ebfb457c9bf4f3e0356b529->leave($__internal_6a10d218d237a3828f076432e12420fa1c0dcdbe0ebfb457c9bf4f3e0356b529_prof);

    }

    public function getTemplateName()
    {
        return ":post:new.html.twig";
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
/*     <h1>Post creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('post_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
