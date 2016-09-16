<?php

/* post/index.html.twig */
class __TwigTemplate_03e50b47a375102d686c42e54149126c1a5b3f4dcce461487d8eb11613298338 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
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
        $__internal_7f59b0dac7e7b01ff7399016fd94e0a2d78959678e4c2afdf0e206f8a84b816f = $this->env->getExtension("native_profiler");
        $__internal_7f59b0dac7e7b01ff7399016fd94e0a2d78959678e4c2afdf0e206f8a84b816f->enter($__internal_7f59b0dac7e7b01ff7399016fd94e0a2d78959678e4c2afdf0e206f8a84b816f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f59b0dac7e7b01ff7399016fd94e0a2d78959678e4c2afdf0e206f8a84b816f->leave($__internal_7f59b0dac7e7b01ff7399016fd94e0a2d78959678e4c2afdf0e206f8a84b816f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d3e7037339c4a022d07d6ec597337af00da94a9a26242a6e00567c9f35be38d = $this->env->getExtension("native_profiler");
        $__internal_1d3e7037339c4a022d07d6ec597337af00da94a9a26242a6e00567c9f35be38d->enter($__internal_1d3e7037339c4a022d07d6ec597337af00da94a9a26242a6e00567c9f35be38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "     <h1>Liste des articles</h1>
    <div >
        <table class=\"highlight\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th data-field=\"\">Title</th>
                    <th data-field=\"\">Description</th>
                    <th data-field=\"\">Createdat</th>
                    <th data-field=\"\">Updatedat</th>
                    <th data-field=\"\">Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 19
            echo "                <tr>
                    <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            if ($this->getAttribute($context["post"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 24
            if ($this->getAttribute($context["post"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">détails</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">modifier</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </tbody>
        </table>

        <ul>
            <li>
                <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("post_new");
        echo "\">Créer un nouvel article</a>
            </li>
        </ul>
    </div>
";
        
        $__internal_1d3e7037339c4a022d07d6ec597337af00da94a9a26242a6e00567c9f35be38d->leave($__internal_1d3e7037339c4a022d07d6ec597337af00da94a9a26242a6e00567c9f35be38d_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
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
/*      <h1>Liste des articles</h1>*/
/*     <div >*/
/*         <table class="highlight">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Id</th>*/
/*                     <th data-field="">Title</th>*/
/*                     <th data-field="">Description</th>*/
/*                     <th data-field="">Createdat</th>*/
/*                     <th data-field="">Updatedat</th>*/
/*                     <th data-field="">Actions</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for post in posts %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('post_show', { 'id': post.id }) }}">{{ post.id }}</a></td>*/
/*                     <td>{{ post.title }}</td>*/
/*                     <td>{{ post.description }}</td>*/
/*                     <td>{% if post.createdAt %}{{ post.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                     <td>{% if post.updatedAt %}{{ post.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                     <td>*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="{{ path('post_show', { 'id': post.id }) }}">détails</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('post_edit', { 'id': post.id }) }}">modifier</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/* */
/*         <ul>*/
/*             <li>*/
/*                 <a href="{{ path('post_new') }}">Créer un nouvel article</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* {% endblock %}*/
/* */
