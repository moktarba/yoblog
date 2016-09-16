<?php

/* blog/single.html.twig */
class __TwigTemplate_36c58b992eeaed9bfc6965f9525a0193aaccd922f16f53c10a194c14803561c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "blog/single.html.twig", 2);
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
        $__internal_6bb41bfab9fd9297eb21fb2f9a0e316f81362410d5f20bef850371ede3ee960a = $this->env->getExtension("native_profiler");
        $__internal_6bb41bfab9fd9297eb21fb2f9a0e316f81362410d5f20bef850371ede3ee960a->enter($__internal_6bb41bfab9fd9297eb21fb2f9a0e316f81362410d5f20bef850371ede3ee960a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/single.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bb41bfab9fd9297eb21fb2f9a0e316f81362410d5f20bef850371ede3ee960a->leave($__internal_6bb41bfab9fd9297eb21fb2f9a0e316f81362410d5f20bef850371ede3ee960a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6d9a04d29cb4d6d45b13ec2fe82c9a245d6ffde01d967ca5a70d1077c2b66c5 = $this->env->getExtension("native_profiler");
        $__internal_b6d9a04d29cb4d6d45b13ec2fe82c9a245d6ffde01d967ca5a70d1077c2b66c5->enter($__internal_b6d9a04d29cb4d6d45b13ec2fe82c9a245d6ffde01d967ca5a70d1077c2b66c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <h3>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["single"]) ? $context["single"] : $this->getContext($context, "single")), "title", array()), "html", null, true);
        echo "</h3>
    <img src=' ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["single"]) ? $context["single"] : $this->getContext($context, "single")), "image", array()), "html", null, true);
        echo "'>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["single"]) ? $context["single"] : $this->getContext($context, "single")), "description", array()), "html", null, true);
        echo "</p>
           <span>";
        // line 9
        if ($this->getAttribute((isset($context["single"]) ? $context["single"] : $this->getContext($context, "single")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["single"]) ? $context["single"] : $this->getContext($context, "single")), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</span>
    <ul>
        <li>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("blog_blog_homepage");
        echo "\">
                <button class=\"btn waves-effect waves-light\"  
                <i class=\"material-icons right\">Retour à l'accueil</i>
                </button>
            </a>
        </li>
    </ul>
";
        
        $__internal_b6d9a04d29cb4d6d45b13ec2fe82c9a245d6ffde01d967ca5a70d1077c2b66c5->leave($__internal_b6d9a04d29cb4d6d45b13ec2fe82c9a245d6ffde01d967ca5a70d1077c2b66c5_prof);

    }

    public function getTemplateName()
    {
        return "blog/single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  55 => 9,  51 => 8,  47 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <h3>{{ single.title }}</h3>*/
/*     <img src=' {{ single.image }}'>*/
/*     <p>{{ single.description }}</p>*/
/*            <span>{% if single.createdAt %}{{ single.createdAt|date('Y-m-d H:i:s') }}{% endif %}</span>*/
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('blog_blog_homepage') }}">*/
/*                 <button class="btn waves-effect waves-light"  */
/*                 <i class="material-icons right">Retour à l'accueil</i>*/
/*                 </button>*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
