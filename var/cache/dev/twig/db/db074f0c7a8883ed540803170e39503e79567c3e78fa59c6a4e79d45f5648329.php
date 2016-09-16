<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_17b5754a1e4e0d908ec2254f7f5da3c3ccbcb8efb228eaf0dfc9501d9d4bde8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83585f432b36be0515e7a6e8dc0b8ffffb4d067b45074252e082bc02673ae200 = $this->env->getExtension("native_profiler");
        $__internal_83585f432b36be0515e7a6e8dc0b8ffffb4d067b45074252e082bc02673ae200->enter($__internal_83585f432b36be0515e7a6e8dc0b8ffffb4d067b45074252e082bc02673ae200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83585f432b36be0515e7a6e8dc0b8ffffb4d067b45074252e082bc02673ae200->leave($__internal_83585f432b36be0515e7a6e8dc0b8ffffb4d067b45074252e082bc02673ae200_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4984bdd690ae5cad9c92682ddedd1ae2d9df552809ef5726162e43485e08af6c = $this->env->getExtension("native_profiler");
        $__internal_4984bdd690ae5cad9c92682ddedd1ae2d9df552809ef5726162e43485e08af6c->enter($__internal_4984bdd690ae5cad9c92682ddedd1ae2d9df552809ef5726162e43485e08af6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4984bdd690ae5cad9c92682ddedd1ae2d9df552809ef5726162e43485e08af6c->leave($__internal_4984bdd690ae5cad9c92682ddedd1ae2d9df552809ef5726162e43485e08af6c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e42d2fc7ce95b20e4bd26861b8870dfb7c002bd248b9f2b070257cee59318b96 = $this->env->getExtension("native_profiler");
        $__internal_e42d2fc7ce95b20e4bd26861b8870dfb7c002bd248b9f2b070257cee59318b96->enter($__internal_e42d2fc7ce95b20e4bd26861b8870dfb7c002bd248b9f2b070257cee59318b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e42d2fc7ce95b20e4bd26861b8870dfb7c002bd248b9f2b070257cee59318b96->leave($__internal_e42d2fc7ce95b20e4bd26861b8870dfb7c002bd248b9f2b070257cee59318b96_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d20fdb4e08449b4571a99a8deb413a11ad2ea78a2eaa3ef6f14c05ff0fc0e7c2 = $this->env->getExtension("native_profiler");
        $__internal_d20fdb4e08449b4571a99a8deb413a11ad2ea78a2eaa3ef6f14c05ff0fc0e7c2->enter($__internal_d20fdb4e08449b4571a99a8deb413a11ad2ea78a2eaa3ef6f14c05ff0fc0e7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d20fdb4e08449b4571a99a8deb413a11ad2ea78a2eaa3ef6f14c05ff0fc0e7c2->leave($__internal_d20fdb4e08449b4571a99a8deb413a11ad2ea78a2eaa3ef6f14c05ff0fc0e7c2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
