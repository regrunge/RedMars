<?php

/* base/base.html.twig */
class __TwigTemplate_2747c3eb48e330ba8c4a76b3ab5c8fc035cc61cef031407b5400b5b41a208d9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("base/javascripts.twig", "base/base.html.twig", 43);
        // line 43
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."base/javascripts.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'navbar' => array($this, 'block_navbar'),
                'content' => array($this, 'block_content'),
                'javascripts' => array($this, 'block_javascripts'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "getName", array(), "method"), "html", null, true);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <!-- Le styles -->
        ";
        // line 11
        $this->loadTemplate("base/stylesheets.twig", "base/base.html.twig", 11)->display($context);
        // line 12
        echo "


        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
  </head>

  <body>
";
        // line 22
        $this->displayBlock('navbar', $context, $blocks);
        // line 25
        echo "        
        ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    ";
        // line 44
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "
  </body>
</html>
";
    }

    // line 22
    public function block_navbar($context, array $blocks = array())
    {
        // line 23
        echo "
        ";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "
      ";
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        // line 45
        echo "\t\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "base/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 45,  112 => 44,  107 => 27,  104 => 26,  99 => 23,  96 => 22,  89 => 47,  86 => 44,  70 => 29,  68 => 26,  65 => 25,  63 => 22,  51 => 12,  49 => 11,  40 => 5,  34 => 1,  14 => 43,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>{{ app.getName()  }}</title>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/* */
/*         <!-- Le styles -->*/
/*         {% include "base/stylesheets.twig" %}*/
/* */
/* */
/* */
/*         <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->*/
/*         <!--[if lt IE 9]>*/
/*             <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*         <![endif]-->*/
/*   </head>*/
/* */
/*   <body>*/
/* {% block navbar %}*/
/* */
/*         {% endblock navbar %}*/
/*         */
/*         {% block content %}*/
/* */
/*       {% endblock content %}*/
/*         </div><!--/span-->*/
/*       </div><!--/row-->*/
/* */
/*       <hr>*/
/* */
/*       <footer>*/
/*         <p>&copy; Company 2012</p>*/
/*       </footer>*/
/* */
/*     </div><!--/.fluid-container-->*/
/* */
/*     <!-- Le javascript*/
/*     ================================================== -->*/
/*     <!-- Placed at the end of the document so the pages load faster -->*/
/*     {% use "base/javascripts.twig" %}*/
/* 	{% block javascripts %}*/
/* 		{{ parent() }}*/
/*     {% endblock javascripts %}*/
/* */
/*   </body>*/
/* </html>*/
/* */
