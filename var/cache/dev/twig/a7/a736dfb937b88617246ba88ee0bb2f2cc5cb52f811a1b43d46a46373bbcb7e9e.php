<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_65f032042840eda6556eb226d0943c647c8a09c7a77e843163a30d5033f415e8 extends Twig_Template
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
        $__internal_54b91d0b2c596888438f2f10df2c49aa87b48566a605ba0c00f599b91c29070b = $this->env->getExtension("native_profiler");
        $__internal_54b91d0b2c596888438f2f10df2c49aa87b48566a605ba0c00f599b91c29070b->enter($__internal_54b91d0b2c596888438f2f10df2c49aa87b48566a605ba0c00f599b91c29070b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_54b91d0b2c596888438f2f10df2c49aa87b48566a605ba0c00f599b91c29070b->leave($__internal_54b91d0b2c596888438f2f10df2c49aa87b48566a605ba0c00f599b91c29070b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
