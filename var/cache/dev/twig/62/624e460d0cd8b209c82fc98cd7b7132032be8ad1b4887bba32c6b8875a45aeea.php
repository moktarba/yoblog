<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d00dcdd4c28cf8f3bedf363e9c49492b97c285740162935c05d215a4f4525279 extends Twig_Template
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
        $__internal_261eda615937796a61bea9ef335180b8d0dcaa61ec7e822e94184bfc150719a2 = $this->env->getExtension("native_profiler");
        $__internal_261eda615937796a61bea9ef335180b8d0dcaa61ec7e822e94184bfc150719a2->enter($__internal_261eda615937796a61bea9ef335180b8d0dcaa61ec7e822e94184bfc150719a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_261eda615937796a61bea9ef335180b8d0dcaa61ec7e822e94184bfc150719a2->leave($__internal_261eda615937796a61bea9ef335180b8d0dcaa61ec7e822e94184bfc150719a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
