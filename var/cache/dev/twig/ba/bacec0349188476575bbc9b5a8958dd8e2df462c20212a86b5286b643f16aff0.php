<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_680c95ec20d58544f9b513471cb6bf29f222051826f707d51252cae258525058 extends Twig_Template
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
        $__internal_a15067c0478edf54bb40b25580108e4dcbafa34362c1ef734429c2ac922f161d = $this->env->getExtension("native_profiler");
        $__internal_a15067c0478edf54bb40b25580108e4dcbafa34362c1ef734429c2ac922f161d->enter($__internal_a15067c0478edf54bb40b25580108e4dcbafa34362c1ef734429c2ac922f161d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a15067c0478edf54bb40b25580108e4dcbafa34362c1ef734429c2ac922f161d->leave($__internal_a15067c0478edf54bb40b25580108e4dcbafa34362c1ef734429c2ac922f161d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
