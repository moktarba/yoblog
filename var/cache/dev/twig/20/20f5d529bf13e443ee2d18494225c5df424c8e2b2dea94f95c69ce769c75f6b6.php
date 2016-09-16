<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_81381391c9d7ef71a7b7ac00517543c16b42a63240fe71ad16d34f681c99e152 extends Twig_Template
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
        $__internal_3daa30a07ba6563cd820b2dba6f4b9188183102d1f37912ce3e7a9234dd5ad5a = $this->env->getExtension("native_profiler");
        $__internal_3daa30a07ba6563cd820b2dba6f4b9188183102d1f37912ce3e7a9234dd5ad5a->enter($__internal_3daa30a07ba6563cd820b2dba6f4b9188183102d1f37912ce3e7a9234dd5ad5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3daa30a07ba6563cd820b2dba6f4b9188183102d1f37912ce3e7a9234dd5ad5a->leave($__internal_3daa30a07ba6563cd820b2dba6f4b9188183102d1f37912ce3e7a9234dd5ad5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
