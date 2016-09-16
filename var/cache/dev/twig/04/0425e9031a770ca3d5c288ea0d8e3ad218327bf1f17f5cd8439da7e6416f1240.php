<?php

/* base.html.twig */
class __TwigTemplate_8e49aee116a112e2953d5bc0df8aea4d9203bcbbfbbd9c90b83281cf096fb0ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b7e9444be8aa5c3c0de07c23f1e91451f33f449d6b28ea6369f54212f69ae8e = $this->env->getExtension("native_profiler");
        $__internal_6b7e9444be8aa5c3c0de07c23f1e91451f33f449d6b28ea6369f54212f69ae8e->enter($__internal_6b7e9444be8aa5c3c0de07c23f1e91451f33f449d6b28ea6369f54212f69ae8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!--Import Google Icon Font-->
      <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
      <!--Import materialize.css-->
      <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("node_modules/materialize-css/dist/css/materialize.min.css"), "html", null, true);
        echo "\"  media=\"screen,projection\"/>
       <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("blog/css/blog.css"), "html", null, true);
        echo "\"  media=\"screen,projection\"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    </head>
    <body>
        <div class=\"container\">
            <nav>
                <div>
              <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("blog_blog_homepage");
        echo "\" class=\"brand-logo\"> yoblog</a>
              <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                    <li><a  href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">connexion</a></li>
                    <li><a  href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">s'abonner</a></li>     
                </ul>
                </div>
            </nav>
                ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "                ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "            <footer class=\"page-footer\">
                <div class=\"container\">
                  <div class=\"row\">
                    <div class=\"col l6 s12\">
                      <h5 class=\"white-text\">Footer Content</h5>
                      <p class=\"grey-text text-lighten-4\">You can use rows and columns here to organize your footer content.</p>
                    </div>
                    <div class=\"col l4 offset-l2 s12\">
                      <h5 class=\"white-text\">Links</h5>
                      <ul>
                        <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 1</a></li>
                        <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 2</a></li>
                        <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 3</a></li>
                        <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 4</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class=\"footer-copyright\">
                  <div class=\"container\">
                  © 2014 Copyright Text
                  <a class=\"grey-text text-lighten-4 right\" href=\"#!\">More Links</a>
                  </div>
                </div>
            </footer>
        </div>
          <!--Import jQuery before materialize.js-->
          <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
          <script type=\"text/javascript\" src=\"js/materialize.min.js\"></script>
          
    </body>
</html>
";
        
        $__internal_6b7e9444be8aa5c3c0de07c23f1e91451f33f449d6b28ea6369f54212f69ae8e->leave($__internal_6b7e9444be8aa5c3c0de07c23f1e91451f33f449d6b28ea6369f54212f69ae8e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b42c97f7b77664136b00b20ed26437fd4a8014df364fe68ca07abaef47d3a61 = $this->env->getExtension("native_profiler");
        $__internal_8b42c97f7b77664136b00b20ed26437fd4a8014df364fe68ca07abaef47d3a61->enter($__internal_8b42c97f7b77664136b00b20ed26437fd4a8014df364fe68ca07abaef47d3a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8b42c97f7b77664136b00b20ed26437fd4a8014df364fe68ca07abaef47d3a61->leave($__internal_8b42c97f7b77664136b00b20ed26437fd4a8014df364fe68ca07abaef47d3a61_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_70c87d9e8258402c4ee624ba528c16b5672c3b1e4cb70b3206b5455a519deaaa = $this->env->getExtension("native_profiler");
        $__internal_70c87d9e8258402c4ee624ba528c16b5672c3b1e4cb70b3206b5455a519deaaa->enter($__internal_70c87d9e8258402c4ee624ba528c16b5672c3b1e4cb70b3206b5455a519deaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_70c87d9e8258402c4ee624ba528c16b5672c3b1e4cb70b3206b5455a519deaaa->leave($__internal_70c87d9e8258402c4ee624ba528c16b5672c3b1e4cb70b3206b5455a519deaaa_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8a815a3f0e643df681946d602e4a1be83d58277ae573dc5596906fadeac762b = $this->env->getExtension("native_profiler");
        $__internal_b8a815a3f0e643df681946d602e4a1be83d58277ae573dc5596906fadeac762b->enter($__internal_b8a815a3f0e643df681946d602e4a1be83d58277ae573dc5596906fadeac762b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b8a815a3f0e643df681946d602e4a1be83d58277ae573dc5596906fadeac762b->leave($__internal_b8a815a3f0e643df681946d602e4a1be83d58277ae573dc5596906fadeac762b_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d295984043f3d4747b1cbba7aff9c1fc2c99d07331049a0e00b0a6be3313c549 = $this->env->getExtension("native_profiler");
        $__internal_d295984043f3d4747b1cbba7aff9c1fc2c99d07331049a0e00b0a6be3313c549->enter($__internal_d295984043f3d4747b1cbba7aff9c1fc2c99d07331049a0e00b0a6be3313c549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d295984043f3d4747b1cbba7aff9c1fc2c99d07331049a0e00b0a6be3313c549->leave($__internal_d295984043f3d4747b1cbba7aff9c1fc2c99d07331049a0e00b0a6be3313c549_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 29,  145 => 28,  134 => 6,  122 => 5,  83 => 30,  80 => 29,  78 => 28,  71 => 24,  67 => 23,  62 => 21,  50 => 12,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <!--Import Google Icon Font-->*/
/*       <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/*       <!--Import materialize.css-->*/
/*       <link type="text/css" rel="stylesheet" href="{{asset('node_modules/materialize-css/dist/css/materialize.min.css')}}"  media="screen,projection"/>*/
/*        <link type="text/css" rel="stylesheet" href="{{asset('blog/css/blog.css')}}"  media="screen,projection"/>*/
/* */
/*       <!--Let browser know website is optimized for mobile-->*/
/*       <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/*     </head>*/
/*     <body>*/
/*         <div class="container">*/
/*             <nav>*/
/*                 <div>*/
/*               <a href="{{path('blog_blog_homepage')}}" class="brand-logo"> yoblog</a>*/
/*               <ul id="nav-mobile" class="right hide-on-med-and-down">*/
/*                     <li><a  href="{{ path('fos_user_security_login') }}">connexion</a></li>*/
/*                     <li><a  href="{{ path('fos_user_registration_register') }}">s'abonner</a></li>     */
/*                 </ul>*/
/*                 </div>*/
/*             </nav>*/
/*                 {% block body %}{% endblock %}*/
/*                 {% block javascripts %}{% endblock %}*/
/*             <footer class="page-footer">*/
/*                 <div class="container">*/
/*                   <div class="row">*/
/*                     <div class="col l6 s12">*/
/*                       <h5 class="white-text">Footer Content</h5>*/
/*                       <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>*/
/*                     </div>*/
/*                     <div class="col l4 offset-l2 s12">*/
/*                       <h5 class="white-text">Links</h5>*/
/*                       <ul>*/
/*                         <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>*/
/*                         <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>*/
/*                         <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>*/
/*                         <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>*/
/*                       </ul>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="footer-copyright">*/
/*                   <div class="container">*/
/*                   © 2014 Copyright Text*/
/*                   <a class="grey-text text-lighten-4 right" href="#!">More Links</a>*/
/*                   </div>*/
/*                 </div>*/
/*             </footer>*/
/*         </div>*/
/*           <!--Import jQuery before materialize.js-->*/
/*           <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>*/
/*           <script type="text/javascript" src="js/materialize.min.js"></script>*/
/*           */
/*     </body>*/
/* </html>*/
/* */
