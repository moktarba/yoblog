<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_302f64d52311fb6071abf38e3721ee7d7a590549f9542cfb422969a306f32468 extends Twig_Template
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
        $__internal_be98fc44c96fb016466ba1a2e7972212caf7c2b277ab28cb6c62058f578219f7 = $this->env->getExtension("native_profiler");
        $__internal_be98fc44c96fb016466ba1a2e7972212caf7c2b277ab28cb6c62058f578219f7->enter($__internal_be98fc44c96fb016466ba1a2e7972212caf7c2b277ab28cb6c62058f578219f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_be98fc44c96fb016466ba1a2e7972212caf7c2b277ab28cb6c62058f578219f7->leave($__internal_be98fc44c96fb016466ba1a2e7972212caf7c2b277ab28cb6c62058f578219f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
