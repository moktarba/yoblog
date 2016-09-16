<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_88be74d4de9f069b5a691c2c2deb36a9284f8f0265ae54137eba0e1d87280d4c extends Twig_Template
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
        $__internal_efc142ddb30c7c84831eaa1f787f3772b7ebcf170a6a53e9a778010d5eb957c1 = $this->env->getExtension("native_profiler");
        $__internal_efc142ddb30c7c84831eaa1f787f3772b7ebcf170a6a53e9a778010d5eb957c1->enter($__internal_efc142ddb30c7c84831eaa1f787f3772b7ebcf170a6a53e9a778010d5eb957c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_efc142ddb30c7c84831eaa1f787f3772b7ebcf170a6a53e9a778010d5eb957c1->leave($__internal_efc142ddb30c7c84831eaa1f787f3772b7ebcf170a6a53e9a778010d5eb957c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
