<?php

/* :category:index.html.twig */
class __TwigTemplate_3ffa8989a92ed927e83542585087c98f51341cdc8094e81d5eead5e2a621ab9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":category:index.html.twig", 1);
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
        $__internal_95b4e12fa5499f9c5e2f13d3cb4d058bd7540cc9b3a87123e473ffc4fbcd2b89 = $this->env->getExtension("native_profiler");
        $__internal_95b4e12fa5499f9c5e2f13d3cb4d058bd7540cc9b3a87123e473ffc4fbcd2b89->enter($__internal_95b4e12fa5499f9c5e2f13d3cb4d058bd7540cc9b3a87123e473ffc4fbcd2b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95b4e12fa5499f9c5e2f13d3cb4d058bd7540cc9b3a87123e473ffc4fbcd2b89->leave($__internal_95b4e12fa5499f9c5e2f13d3cb4d058bd7540cc9b3a87123e473ffc4fbcd2b89_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_953c64d24d1e5f394d2e74db715372daff09669eec07fdf1843fbcd33de737b2 = $this->env->getExtension("native_profiler");
        $__internal_953c64d24d1e5f394d2e74db715372daff09669eec07fdf1843fbcd33de737b2->enter($__internal_953c64d24d1e5f394d2e74db715372daff09669eec07fdf1843fbcd33de737b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des catégories</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Createdat</th>
                <th>Updatedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["category"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["category"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["category"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["category"], "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">détails</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">modifier</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("category_new");
        echo "\">Créer une nouvelle catégorie</a>
        </li>
    </ul>
";
        
        $__internal_953c64d24d1e5f394d2e74db715372daff09669eec07fdf1843fbcd33de737b2->leave($__internal_953c64d24d1e5f394d2e74db715372daff09669eec07fdf1843fbcd33de737b2_prof);

    }

    public function getTemplateName()
    {
        return ":category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 42,  110 => 37,  98 => 31,  92 => 28,  83 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Liste des catégories</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Description</th>*/
/*                 <th>Createdat</th>*/
/*                 <th>Updatedat</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for category in categories %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('category_show', { 'id': category.id }) }}">{{ category.id }}</a></td>*/
/*                 <td>{{ category.name }}</td>*/
/*                 <td>{{ category.description }}</td>*/
/*                 <td>{% if category.createdAt %}{{ category.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if category.updatedAt %}{{ category.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('category_show', { 'id': category.id }) }}">détails</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('category_edit', { 'id': category.id }) }}">modifier</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('category_new') }}">Créer une nouvelle catégorie</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
