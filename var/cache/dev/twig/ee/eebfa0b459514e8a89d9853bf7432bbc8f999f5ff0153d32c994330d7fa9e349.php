<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7893033acb024dfad7ecd185bd333bc2978edbbd5b71b6ac78ee4a95deae25e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_dff2875a8c78be940087eb16bfac1b815db7845c7405cc7a513459f57fa1daae = $this->env->getExtension("native_profiler");
        $__internal_dff2875a8c78be940087eb16bfac1b815db7845c7405cc7a513459f57fa1daae->enter($__internal_dff2875a8c78be940087eb16bfac1b815db7845c7405cc7a513459f57fa1daae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dff2875a8c78be940087eb16bfac1b815db7845c7405cc7a513459f57fa1daae->leave($__internal_dff2875a8c78be940087eb16bfac1b815db7845c7405cc7a513459f57fa1daae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_708b8f343906e1dbc18afccc2991840a08fbdeeb44d7aa9ffbca05aea8b39e08 = $this->env->getExtension("native_profiler");
        $__internal_708b8f343906e1dbc18afccc2991840a08fbdeeb44d7aa9ffbca05aea8b39e08->enter($__internal_708b8f343906e1dbc18afccc2991840a08fbdeeb44d7aa9ffbca05aea8b39e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_708b8f343906e1dbc18afccc2991840a08fbdeeb44d7aa9ffbca05aea8b39e08->leave($__internal_708b8f343906e1dbc18afccc2991840a08fbdeeb44d7aa9ffbca05aea8b39e08_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5841e9ffdfabc15f135b27152cc5059171d6c535f15fb981424d6e5915557db = $this->env->getExtension("native_profiler");
        $__internal_c5841e9ffdfabc15f135b27152cc5059171d6c535f15fb981424d6e5915557db->enter($__internal_c5841e9ffdfabc15f135b27152cc5059171d6c535f15fb981424d6e5915557db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c5841e9ffdfabc15f135b27152cc5059171d6c535f15fb981424d6e5915557db->leave($__internal_c5841e9ffdfabc15f135b27152cc5059171d6c535f15fb981424d6e5915557db_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
