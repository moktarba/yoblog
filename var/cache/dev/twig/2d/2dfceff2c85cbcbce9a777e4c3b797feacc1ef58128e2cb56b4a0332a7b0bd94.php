<?php

/* :user:edit.html.twig */
class __TwigTemplate_f67ffbeed85f388a0244c63617f15e2bda43df5f47a3ab4b3db91361dd687555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:edit.html.twig", 1);
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
        $__internal_7d4607a02fa19eaebf16a41e1808d2d70db13c3f95cae9d725d0d16ad289e898 = $this->env->getExtension("native_profiler");
        $__internal_7d4607a02fa19eaebf16a41e1808d2d70db13c3f95cae9d725d0d16ad289e898->enter($__internal_7d4607a02fa19eaebf16a41e1808d2d70db13c3f95cae9d725d0d16ad289e898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d4607a02fa19eaebf16a41e1808d2d70db13c3f95cae9d725d0d16ad289e898->leave($__internal_7d4607a02fa19eaebf16a41e1808d2d70db13c3f95cae9d725d0d16ad289e898_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f108d31d2b65f83c8322b0ef74cb8f013f0a3796af32c3a499bad1b446884f7a = $this->env->getExtension("native_profiler");
        $__internal_f108d31d2b65f83c8322b0ef74cb8f013f0a3796af32c3a499bad1b446884f7a->enter($__internal_f108d31d2b65f83c8322b0ef74cb8f013f0a3796af32c3a499bad1b446884f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f108d31d2b65f83c8322b0ef74cb8f013f0a3796af32c3a499bad1b446884f7a->leave($__internal_f108d31d2b65f83c8322b0ef74cb8f013f0a3796af32c3a499bad1b446884f7a_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
