<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_fb0dec5523eed2f23bbadb8b8028240c134aece189d2030fe58076991b85de46 extends Twig_Template
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
        $__internal_5d421d458c926cca28984be8e409af9c28ad6f5bc159230b850e584ff316a8ca = $this->env->getExtension("native_profiler");
        $__internal_5d421d458c926cca28984be8e409af9c28ad6f5bc159230b850e584ff316a8ca->enter($__internal_5d421d458c926cca28984be8e409af9c28ad6f5bc159230b850e584ff316a8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5d421d458c926cca28984be8e409af9c28ad6f5bc159230b850e584ff316a8ca->leave($__internal_5d421d458c926cca28984be8e409af9c28ad6f5bc159230b850e584ff316a8ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
