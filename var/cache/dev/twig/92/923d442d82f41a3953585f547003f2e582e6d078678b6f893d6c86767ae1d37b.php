<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2080c0f89c8437c079272147414175235d38dd02733316df482e60829f96441d extends Twig_Template
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
        $__internal_c27b4c459f859482f2530d62fa21ef75eca2b8276e9151a2ff6e9dd1b63172e5 = $this->env->getExtension("native_profiler");
        $__internal_c27b4c459f859482f2530d62fa21ef75eca2b8276e9151a2ff6e9dd1b63172e5->enter($__internal_c27b4c459f859482f2530d62fa21ef75eca2b8276e9151a2ff6e9dd1b63172e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c27b4c459f859482f2530d62fa21ef75eca2b8276e9151a2ff6e9dd1b63172e5->leave($__internal_c27b4c459f859482f2530d62fa21ef75eca2b8276e9151a2ff6e9dd1b63172e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
