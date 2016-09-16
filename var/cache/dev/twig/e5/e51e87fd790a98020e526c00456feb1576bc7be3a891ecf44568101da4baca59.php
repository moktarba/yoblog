<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e0c3750c58559430c803d0a964a4d65a01d975f94eab9d0b0cc8e8b419a82d0f extends Twig_Template
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
        $__internal_2650171e37a173d01d7bb9dab14cab37000c4c0657a8af798e018caa61a109ee = $this->env->getExtension("native_profiler");
        $__internal_2650171e37a173d01d7bb9dab14cab37000c4c0657a8af798e018caa61a109ee->enter($__internal_2650171e37a173d01d7bb9dab14cab37000c4c0657a8af798e018caa61a109ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2650171e37a173d01d7bb9dab14cab37000c4c0657a8af798e018caa61a109ee->leave($__internal_2650171e37a173d01d7bb9dab14cab37000c4c0657a8af798e018caa61a109ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
