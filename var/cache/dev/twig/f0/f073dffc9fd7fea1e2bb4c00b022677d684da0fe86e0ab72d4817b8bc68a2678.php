<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2c377872b48a479244d3847329516c6227331af1e452bc09a3c72ce7f85c1a2f extends Twig_Template
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
        $__internal_2b2814bf53beae82f553501ec1bfff6cab4f2ddcdd672cd9f68f278ade67dfdb = $this->env->getExtension("native_profiler");
        $__internal_2b2814bf53beae82f553501ec1bfff6cab4f2ddcdd672cd9f68f278ade67dfdb->enter($__internal_2b2814bf53beae82f553501ec1bfff6cab4f2ddcdd672cd9f68f278ade67dfdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2b2814bf53beae82f553501ec1bfff6cab4f2ddcdd672cd9f68f278ade67dfdb->leave($__internal_2b2814bf53beae82f553501ec1bfff6cab4f2ddcdd672cd9f68f278ade67dfdb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
