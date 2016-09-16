<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_35c399ea641a2d5096324df990f565c1cfa352d2cf5713fa81b252b69d517b4d extends Twig_Template
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
        $__internal_981c9daf71764d23854bd9535631bd2743c6be863d1fccccf1a8b3658eecb8fb = $this->env->getExtension("native_profiler");
        $__internal_981c9daf71764d23854bd9535631bd2743c6be863d1fccccf1a8b3658eecb8fb->enter($__internal_981c9daf71764d23854bd9535631bd2743c6be863d1fccccf1a8b3658eecb8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_981c9daf71764d23854bd9535631bd2743c6be863d1fccccf1a8b3658eecb8fb->leave($__internal_981c9daf71764d23854bd9535631bd2743c6be863d1fccccf1a8b3658eecb8fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
