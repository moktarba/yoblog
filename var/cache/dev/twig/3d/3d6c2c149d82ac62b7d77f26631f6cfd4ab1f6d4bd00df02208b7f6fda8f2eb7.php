<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d17fc2f3080e28e769494afa8243949eff2f9c81b81a0a2fa3be32fa544d7ca1 extends Twig_Template
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
        $__internal_172cdc24a8a35ca2b24a5a529e5cb4304b4e700a4bcbe649e85868dd7fc7453d = $this->env->getExtension("native_profiler");
        $__internal_172cdc24a8a35ca2b24a5a529e5cb4304b4e700a4bcbe649e85868dd7fc7453d->enter($__internal_172cdc24a8a35ca2b24a5a529e5cb4304b4e700a4bcbe649e85868dd7fc7453d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_172cdc24a8a35ca2b24a5a529e5cb4304b4e700a4bcbe649e85868dd7fc7453d->leave($__internal_172cdc24a8a35ca2b24a5a529e5cb4304b4e700a4bcbe649e85868dd7fc7453d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
