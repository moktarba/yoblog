<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_106fd4090f52c790f38aefc853feed674e1214636268959e5537e7bd78f0f5fd extends Twig_Template
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
        $__internal_9e02188d81db138db5ea297187433fea7df2909b640c8567c87bfb4a32bf4d6d = $this->env->getExtension("native_profiler");
        $__internal_9e02188d81db138db5ea297187433fea7df2909b640c8567c87bfb4a32bf4d6d->enter($__internal_9e02188d81db138db5ea297187433fea7df2909b640c8567c87bfb4a32bf4d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_9e02188d81db138db5ea297187433fea7df2909b640c8567c87bfb4a32bf4d6d->leave($__internal_9e02188d81db138db5ea297187433fea7df2909b640c8567c87bfb4a32bf4d6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
