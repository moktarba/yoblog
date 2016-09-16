<?php

/* blog/home.html.twig */
class __TwigTemplate_108f0ffaec2904402f760e4cde5376d28d2f26fb0a4f2838a84318d5da42b7a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "blog/home.html.twig", 2);
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
        $__internal_99d7391c8c60e4b460ef320d2d2439f238a913fba32336461ab2a283982d96f8 = $this->env->getExtension("native_profiler");
        $__internal_99d7391c8c60e4b460ef320d2d2439f238a913fba32336461ab2a283982d96f8->enter($__internal_99d7391c8c60e4b460ef320d2d2439f238a913fba32336461ab2a283982d96f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99d7391c8c60e4b460ef320d2d2439f238a913fba32336461ab2a283982d96f8->leave($__internal_99d7391c8c60e4b460ef320d2d2439f238a913fba32336461ab2a283982d96f8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_06669a10dc912eff7b18687f98c4f429d766b06a2c3f9e909db0b19de9f133c3 = $this->env->getExtension("native_profiler");
        $__internal_06669a10dc912eff7b18687f98c4f429d766b06a2c3f9e909db0b19de9f133c3->enter($__internal_06669a10dc912eff7b18687f98c4f429d766b06a2c3f9e909db0b19de9f133c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "     <h1></h1>
    <div >
       
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "                <tr>
                    
                    <h4>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h4>
                    <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "image", array()), "html", null, true);
            echo "\">
                    <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "description", array()), "html", null, true);
            echo "</p>
                    <span><b>créé le : </b> ";
            // line 14
            if ($this->getAttribute($context["post"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "createdAt", array()), "d-m-Y à H:i:s"), "html", null, true);
            }
            echo "</span>
                    <td>
                        <ul>
                            <li>
                                 <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_blog_single", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn waves-effect waves-light\"  
                                    <i class=\"material-icons right\">voir plus</i>
                                  </button>
                                  </a>      
                            </li>
                          
                        </ul>
                    </td>
            </tr><hr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "       

    </div>
";
        
        $__internal_06669a10dc912eff7b18687f98c4f429d766b06a2c3f9e909db0b19de9f133c3->leave($__internal_06669a10dc912eff7b18687f98c4f429d766b06a2c3f9e909db0b19de9f133c3_prof);

    }

    public function getTemplateName()
    {
        return "blog/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  74 => 18,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  49 => 9,  45 => 8,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*      <h1></h1>*/
/*     <div >*/
/*        */
/*             {% for post in posts %}*/
/*                 <tr>*/
/*                     */
/*                     <h4>{{ post.title }}</h4>*/
/*                     <img src="{{ post.image }}">*/
/*                     <p>{{ post.description }}</p>*/
/*                     <span><b>créé le : </b> {% if post.createdAt %}{{ post.createdAt|date('d-m-Y à H:i:s') }}{% endif %}</span>*/
/*                     <td>*/
/*                         <ul>*/
/*                             <li>*/
/*                                  <a href="{{ path('blog_blog_single', { 'id': post.id }) }}"><button class="btn waves-effect waves-light"  */
/*                                     <i class="material-icons right">voir plus</i>*/
/*                                   </button>*/
/*                                   </a>      */
/*                             </li>*/
/*                           */
/*                         </ul>*/
/*                     </td>*/
/*             </tr><hr>*/
/*             {% endfor %}*/
/*        */
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
