<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_ae1d96fd7e693de38dfc43422319d21254e6c0dcc2d2482c6d24f044854c1aa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f759f6e8f79f6d51d6ee32ade14103ae66f146b41ef92a3ce8a0cc2b10b93be5 = $this->env->getExtension("native_profiler");
        $__internal_f759f6e8f79f6d51d6ee32ade14103ae66f146b41ef92a3ce8a0cc2b10b93be5->enter($__internal_f759f6e8f79f6d51d6ee32ade14103ae66f146b41ef92a3ce8a0cc2b10b93be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f759f6e8f79f6d51d6ee32ade14103ae66f146b41ef92a3ce8a0cc2b10b93be5->leave($__internal_f759f6e8f79f6d51d6ee32ade14103ae66f146b41ef92a3ce8a0cc2b10b93be5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
