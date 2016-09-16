<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_27eff365b8e9ae9e49d36a4f89c1e32b1113456bac875dddcd01d71a30f17985 extends Twig_Template
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
        $__internal_4feb4efdcce5ea56e83afcaa4f1edcd4f5b2ec7716dd6e63f8b9cfd8d7121f4d = $this->env->getExtension("native_profiler");
        $__internal_4feb4efdcce5ea56e83afcaa4f1edcd4f5b2ec7716dd6e63f8b9cfd8d7121f4d->enter($__internal_4feb4efdcce5ea56e83afcaa4f1edcd4f5b2ec7716dd6e63f8b9cfd8d7121f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4feb4efdcce5ea56e83afcaa4f1edcd4f5b2ec7716dd6e63f8b9cfd8d7121f4d->leave($__internal_4feb4efdcce5ea56e83afcaa4f1edcd4f5b2ec7716dd6e63f8b9cfd8d7121f4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
