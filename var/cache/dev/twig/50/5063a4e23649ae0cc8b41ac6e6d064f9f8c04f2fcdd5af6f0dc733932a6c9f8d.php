<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6dbb9872315ceb2b61df46ff184069544fb8a43295d8626af392d508068ece12 extends Twig_Template
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
        $__internal_b9e40dc1df3a916574a823191b0ff958318b6a792150b7a2486ea1dedd8dbb5e = $this->env->getExtension("native_profiler");
        $__internal_b9e40dc1df3a916574a823191b0ff958318b6a792150b7a2486ea1dedd8dbb5e->enter($__internal_b9e40dc1df3a916574a823191b0ff958318b6a792150b7a2486ea1dedd8dbb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b9e40dc1df3a916574a823191b0ff958318b6a792150b7a2486ea1dedd8dbb5e->leave($__internal_b9e40dc1df3a916574a823191b0ff958318b6a792150b7a2486ea1dedd8dbb5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
