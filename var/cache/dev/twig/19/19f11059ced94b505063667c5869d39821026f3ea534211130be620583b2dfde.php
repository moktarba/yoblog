<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_250dc6599626cbf9dbecb5cb0dc6dacdb1c2d429fe68c974bb955f0d8911e49c extends Twig_Template
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
        $__internal_4463ddb341f40d961d4a93f68d2890498a52b902ffd830d56dccf2ce1d6f3dc8 = $this->env->getExtension("native_profiler");
        $__internal_4463ddb341f40d961d4a93f68d2890498a52b902ffd830d56dccf2ce1d6f3dc8->enter($__internal_4463ddb341f40d961d4a93f68d2890498a52b902ffd830d56dccf2ce1d6f3dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4463ddb341f40d961d4a93f68d2890498a52b902ffd830d56dccf2ce1d6f3dc8->leave($__internal_4463ddb341f40d961d4a93f68d2890498a52b902ffd830d56dccf2ce1d6f3dc8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
