<?php

/* :category:new.html.twig */
class __TwigTemplate_6df1503ac9eabaec32a1ff64b06d17fe2c7ee5144867a76afe4a437b7c1c5e08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":category:new.html.twig", 1);
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
        $__internal_1698c4e76dcf136e6b2d7b55ce9755ad65641c748ead972747ce5d315fc6199c = $this->env->getExtension("native_profiler");
        $__internal_1698c4e76dcf136e6b2d7b55ce9755ad65641c748ead972747ce5d315fc6199c->enter($__internal_1698c4e76dcf136e6b2d7b55ce9755ad65641c748ead972747ce5d315fc6199c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1698c4e76dcf136e6b2d7b55ce9755ad65641c748ead972747ce5d315fc6199c->leave($__internal_1698c4e76dcf136e6b2d7b55ce9755ad65641c748ead972747ce5d315fc6199c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f27239aacf1bded5e58a0b33acd6f1e2d15a84516e506f719642464726b51e8b = $this->env->getExtension("native_profiler");
        $__internal_f27239aacf1bded5e58a0b33acd6f1e2d15a84516e506f719642464726b51e8b->enter($__internal_f27239aacf1bded5e58a0b33acd6f1e2d15a84516e506f719642464726b51e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f27239aacf1bded5e58a0b33acd6f1e2d15a84516e506f719642464726b51e8b->leave($__internal_f27239aacf1bded5e58a0b33acd6f1e2d15a84516e506f719642464726b51e8b_prof);

    }

    public function getTemplateName()
    {
        return ":category:new.html.twig";
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
/*     <h1>Category creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('category_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
