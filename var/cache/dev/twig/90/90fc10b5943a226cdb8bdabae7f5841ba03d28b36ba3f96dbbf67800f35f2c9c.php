<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e028714c9ac1a3dc098becdc7c20e6685eb3abf9fa74a449fbf22bd78d7b520d extends Twig_Template
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
        $__internal_00d65c84773dafd7bef20f96f4f2955617b720bb6a53719bcee1f37959bef1de = $this->env->getExtension("native_profiler");
        $__internal_00d65c84773dafd7bef20f96f4f2955617b720bb6a53719bcee1f37959bef1de->enter($__internal_00d65c84773dafd7bef20f96f4f2955617b720bb6a53719bcee1f37959bef1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_00d65c84773dafd7bef20f96f4f2955617b720bb6a53719bcee1f37959bef1de->leave($__internal_00d65c84773dafd7bef20f96f4f2955617b720bb6a53719bcee1f37959bef1de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
