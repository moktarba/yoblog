<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3e32523e6392e5eb465dff5166f7633e44eb6d49bd0d7badcb2e8d627d1e4d8f extends Twig_Template
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
        $__internal_ad1c8f3796c6efc8ab588013ccfb7ffd81823debe0edaa0c820ed572226b0ebd = $this->env->getExtension("native_profiler");
        $__internal_ad1c8f3796c6efc8ab588013ccfb7ffd81823debe0edaa0c820ed572226b0ebd->enter($__internal_ad1c8f3796c6efc8ab588013ccfb7ffd81823debe0edaa0c820ed572226b0ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ad1c8f3796c6efc8ab588013ccfb7ffd81823debe0edaa0c820ed572226b0ebd->leave($__internal_ad1c8f3796c6efc8ab588013ccfb7ffd81823debe0edaa0c820ed572226b0ebd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
