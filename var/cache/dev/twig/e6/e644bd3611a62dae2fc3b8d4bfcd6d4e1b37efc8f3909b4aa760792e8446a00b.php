<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_5cda2de648b405dae62fd386be2319de9600493ddd43bf91c43adce438ef710c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6620b9e408a214609d9d962b4898bc17c0db82f049f77d5858cd82c2c80e31cd = $this->env->getExtension("native_profiler");
        $__internal_6620b9e408a214609d9d962b4898bc17c0db82f049f77d5858cd82c2c80e31cd->enter($__internal_6620b9e408a214609d9d962b4898bc17c0db82f049f77d5858cd82c2c80e31cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6620b9e408a214609d9d962b4898bc17c0db82f049f77d5858cd82c2c80e31cd->leave($__internal_6620b9e408a214609d9d962b4898bc17c0db82f049f77d5858cd82c2c80e31cd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_359a0acaa75336276d14835c3c7dfea193c4ee1035cfebd1ad58dc8c288f4650 = $this->env->getExtension("native_profiler");
        $__internal_359a0acaa75336276d14835c3c7dfea193c4ee1035cfebd1ad58dc8c288f4650->enter($__internal_359a0acaa75336276d14835c3c7dfea193c4ee1035cfebd1ad58dc8c288f4650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_359a0acaa75336276d14835c3c7dfea193c4ee1035cfebd1ad58dc8c288f4650->leave($__internal_359a0acaa75336276d14835c3c7dfea193c4ee1035cfebd1ad58dc8c288f4650_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9675d8e9bfc30e51fa54460ec499bd68ec949ad14ef358664cbc3522be1b8391 = $this->env->getExtension("native_profiler");
        $__internal_9675d8e9bfc30e51fa54460ec499bd68ec949ad14ef358664cbc3522be1b8391->enter($__internal_9675d8e9bfc30e51fa54460ec499bd68ec949ad14ef358664cbc3522be1b8391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9675d8e9bfc30e51fa54460ec499bd68ec949ad14ef358664cbc3522be1b8391->leave($__internal_9675d8e9bfc30e51fa54460ec499bd68ec949ad14ef358664cbc3522be1b8391_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3d81b341dfa65f69a40c76854c28b37391ff3ce945f842c836bfbed7da936bb1 = $this->env->getExtension("native_profiler");
        $__internal_3d81b341dfa65f69a40c76854c28b37391ff3ce945f842c836bfbed7da936bb1->enter($__internal_3d81b341dfa65f69a40c76854c28b37391ff3ce945f842c836bfbed7da936bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3d81b341dfa65f69a40c76854c28b37391ff3ce945f842c836bfbed7da936bb1->leave($__internal_3d81b341dfa65f69a40c76854c28b37391ff3ce945f842c836bfbed7da936bb1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
