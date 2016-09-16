<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6ef1ee59c3f9fc659b80e5c7dd0e9551d53b002c89d50e116a4667af261b296a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_568496d4a9f0468b6e88695477dae5493467218eec6c391555d19bb5eb96eefd = $this->env->getExtension("native_profiler");
        $__internal_568496d4a9f0468b6e88695477dae5493467218eec6c391555d19bb5eb96eefd->enter($__internal_568496d4a9f0468b6e88695477dae5493467218eec6c391555d19bb5eb96eefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_568496d4a9f0468b6e88695477dae5493467218eec6c391555d19bb5eb96eefd->leave($__internal_568496d4a9f0468b6e88695477dae5493467218eec6c391555d19bb5eb96eefd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c1362b6898baf6d96316107f23e65d7d5d02d6dce1c99744d35e5a64fb20be2 = $this->env->getExtension("native_profiler");
        $__internal_1c1362b6898baf6d96316107f23e65d7d5d02d6dce1c99744d35e5a64fb20be2->enter($__internal_1c1362b6898baf6d96316107f23e65d7d5d02d6dce1c99744d35e5a64fb20be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1c1362b6898baf6d96316107f23e65d7d5d02d6dce1c99744d35e5a64fb20be2->leave($__internal_1c1362b6898baf6d96316107f23e65d7d5d02d6dce1c99744d35e5a64fb20be2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
