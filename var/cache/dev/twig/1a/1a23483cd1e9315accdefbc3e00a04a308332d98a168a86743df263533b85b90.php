<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_e3e44a8e2b0d6b6815004bddc971a9b5363c5a98ba058e87f9cb689d48f14293 extends Twig_Template
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
        $__internal_20c50ef376244e0ef78504714e736eeca6e7b8a922d54071a753479a5970fb98 = $this->env->getExtension("native_profiler");
        $__internal_20c50ef376244e0ef78504714e736eeca6e7b8a922d54071a753479a5970fb98->enter($__internal_20c50ef376244e0ef78504714e736eeca6e7b8a922d54071a753479a5970fb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_20c50ef376244e0ef78504714e736eeca6e7b8a922d54071a753479a5970fb98->leave($__internal_20c50ef376244e0ef78504714e736eeca6e7b8a922d54071a753479a5970fb98_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d9cf0f00fba4b2892d905018fb6d4351c8fb65dd62b51f72759eab08fea35d14 = $this->env->getExtension("native_profiler");
        $__internal_d9cf0f00fba4b2892d905018fb6d4351c8fb65dd62b51f72759eab08fea35d14->enter($__internal_d9cf0f00fba4b2892d905018fb6d4351c8fb65dd62b51f72759eab08fea35d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d9cf0f00fba4b2892d905018fb6d4351c8fb65dd62b51f72759eab08fea35d14->leave($__internal_d9cf0f00fba4b2892d905018fb6d4351c8fb65dd62b51f72759eab08fea35d14_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d0705802de0900410dc366e8bab06673e7deac99cdf48fd7d11cb145bfb11af6 = $this->env->getExtension("native_profiler");
        $__internal_d0705802de0900410dc366e8bab06673e7deac99cdf48fd7d11cb145bfb11af6->enter($__internal_d0705802de0900410dc366e8bab06673e7deac99cdf48fd7d11cb145bfb11af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d0705802de0900410dc366e8bab06673e7deac99cdf48fd7d11cb145bfb11af6->leave($__internal_d0705802de0900410dc366e8bab06673e7deac99cdf48fd7d11cb145bfb11af6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3962b77ae74765446fc03dd8a14a710f370f3578778a5a5fd17caa59e13954d8 = $this->env->getExtension("native_profiler");
        $__internal_3962b77ae74765446fc03dd8a14a710f370f3578778a5a5fd17caa59e13954d8->enter($__internal_3962b77ae74765446fc03dd8a14a710f370f3578778a5a5fd17caa59e13954d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3962b77ae74765446fc03dd8a14a710f370f3578778a5a5fd17caa59e13954d8->leave($__internal_3962b77ae74765446fc03dd8a14a710f370f3578778a5a5fd17caa59e13954d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
