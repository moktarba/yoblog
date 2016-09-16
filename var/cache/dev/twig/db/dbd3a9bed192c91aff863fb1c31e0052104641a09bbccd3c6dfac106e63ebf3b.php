<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e44abbef126836c2c577ee59149479ae90e2ef8c05034503ca8d9108050747c9 extends Twig_Template
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
        $__internal_133eee7dc850dda91eb7d63bda678d87cc64572aea1f007a3bf38355ff6b892f = $this->env->getExtension("native_profiler");
        $__internal_133eee7dc850dda91eb7d63bda678d87cc64572aea1f007a3bf38355ff6b892f->enter($__internal_133eee7dc850dda91eb7d63bda678d87cc64572aea1f007a3bf38355ff6b892f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_133eee7dc850dda91eb7d63bda678d87cc64572aea1f007a3bf38355ff6b892f->leave($__internal_133eee7dc850dda91eb7d63bda678d87cc64572aea1f007a3bf38355ff6b892f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
