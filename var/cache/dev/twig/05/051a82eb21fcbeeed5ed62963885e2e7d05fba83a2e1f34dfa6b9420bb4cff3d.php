<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_818453ec2d47a4da7d31a60c62af2a3b012606912eba8b9f2c18a2f7f792b0b5 extends Twig_Template
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
        $__internal_dc5749f5b39419d4df84a189fd3f25daf6168e81d32f7e72ac3c61b94a4657f3 = $this->env->getExtension("native_profiler");
        $__internal_dc5749f5b39419d4df84a189fd3f25daf6168e81d32f7e72ac3c61b94a4657f3->enter($__internal_dc5749f5b39419d4df84a189fd3f25daf6168e81d32f7e72ac3c61b94a4657f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_dc5749f5b39419d4df84a189fd3f25daf6168e81d32f7e72ac3c61b94a4657f3->leave($__internal_dc5749f5b39419d4df84a189fd3f25daf6168e81d32f7e72ac3c61b94a4657f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
