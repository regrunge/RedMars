<?php

/* base/fluid.html.twig */
class __TwigTemplate_2747c3eb48e330ba8c4a76b3ab5c8fc035cc61cef031407b5400b5b41a208d9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("base/stylesheets.twig", "base/fluid.html.twig", 12);
        // line 12
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."base/stylesheets.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("base/sidebar.twig", "base/fluid.html.twig", 60);
        // line 60
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."base/sidebar.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $_trait_2 = $this->loadTemplate("base/javascripts.twig", "base/fluid.html.twig", 125);
        // line 125
        if (!$_trait_2->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."base/javascripts.twig".'" cannot be used as a trait.');
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'stylesheets' => array($this, 'block_stylesheets'),
                'navbar' => array($this, 'block_navbar'),
                'sidebar' => array($this, 'block_sidebar'),
                'content' => array($this, 'block_content'),
                'javascripts' => array($this, 'block_javascripts'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "getName", array(), "method"), "html", null, true);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le styles -->
 ";
        // line 13
        echo "    
    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"../assets/ico/favicon.ico\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"../assets/ico/apple-touch-icon-114-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"../assets/ico/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"../assets/ico/apple-touch-icon-57-precomposed.png\">
  </head>

  <body>

    <div class=\"navbar navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container-fluid\">
          ";
        // line 44
        $this->displayBlock('navbar', $context, $blocks);
        // line 53
        echo "        </div>
      </div>
    </div>

    <div class=\"container-fluid\">
      <div class=\"row-fluid\">
        <div class=\"span3\">
\t\t";
        // line 61
        echo "          ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 65
        echo "        </div><!--/span-->
        <div class=\"span9\">
        ";
        // line 67
        if ((isset($context["flash"]) ? $context["flash"] : null)) {
            // line 68
            echo "        \t";
            $this->loadTemplate("base/components/flash.twig", "base/fluid.html.twig", 68)->display($context);
            // line 69
            echo "        ";
        }
        // line 70
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 111
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
        // line 126
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 129
        echo "
  </body>
</html>
";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "    \t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t\t <style type=\"text/css\">
\t      body {
\t        padding-top: 60px;
\t        padding-bottom: 40px;
\t      }
\t      .sidebar-nav {
\t        padding: 9px 0;
\t      }
\t    </style>
    ";
    }

    // line 44
    public function block_navbar($context, array $blocks = array())
    {
        // line 45
        echo "\t          <a class=\"brand\" href=\"#\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "getName", array(), "method"), "html", null, true);
        echo "</a>
\t          <ul class=\"nav\">
\t            <li class=\"active\"><a href=\"#\"><i class=\"icon icon-white icon-home\"></i> Home</a></li>
\t          </ul>
\t          ";
        // line 49
        if ((isset($context["currentUser"]) ? $context["currentUser"] : null)) {
            // line 50
            echo "\t          \t<p class=\"pull-right\">Logged in as <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "getFullName", array(), "method"), "html", null, true);
            echo "</a></p>
\t          ";
        }
        // line 52
        echo "        ";
    }

    // line 61
    public function block_sidebar($context, array $blocks = array())
    {
        // line 62
        echo "        \t";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
        
       \t";
    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
        // line 71
        echo "          <div class=\"hero-unit\">
            <h1>Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class=\"btn btn-primary btn-large\">Learn more &raquo;</a></p>
          </div>
          <div class=\"row-fluid\">
            <div class=\"span4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
            </div><!--/span-->
            <div class=\"span4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
            </div><!--/span-->
            <div class=\"span4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
          <div class=\"row-fluid\">
            <div class=\"span4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
            </div><!--/span-->
            <div class=\"span4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
            </div><!--/span-->
            <div class=\"span4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
          ";
    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        // line 127
        echo "\t\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "base/fluid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 127,  249 => 126,  206 => 71,  203 => 70,  195 => 62,  192 => 61,  188 => 52,  182 => 50,  180 => 49,  172 => 45,  169 => 44,  153 => 15,  150 => 14,  143 => 129,  140 => 126,  124 => 111,  121 => 70,  118 => 69,  115 => 68,  113 => 67,  109 => 65,  106 => 61,  97 => 53,  95 => 44,  75 => 26,  73 => 14,  70 => 13,  61 => 6,  54 => 1,  28 => 125,  21 => 60,  14 => 12,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <title>{{ app.getName()  }}</title>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <!-- Le styles -->*/
/*  {% use "base/stylesheets.twig" %}*/
/*     */
/*     {% block stylesheets %}*/
/*     	{{ parent() }}*/
/* 		 <style type="text/css">*/
/* 	      body {*/
/* 	        padding-top: 60px;*/
/* 	        padding-bottom: 40px;*/
/* 	      }*/
/* 	      .sidebar-nav {*/
/* 	        padding: 9px 0;*/
/* 	      }*/
/* 	    </style>*/
/*     {% endblock stylesheets %}*/
/* */
/*     <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*     <![endif]-->*/
/* */
/*     <!-- Le fav and touch icons -->*/
/*     <link rel="shortcut icon" href="../assets/ico/favicon.ico">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">*/
/*     <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">*/
/*   </head>*/
/* */
/*   <body>*/
/* */
/*     <div class="navbar navbar-fixed-top">*/
/*       <div class="navbar-inner">*/
/*         <div class="container-fluid">*/
/*           {% block navbar %}*/
/* 	          <a class="brand" href="#">{{ app.getName() }}</a>*/
/* 	          <ul class="nav">*/
/* 	            <li class="active"><a href="#"><i class="icon icon-white icon-home"></i> Home</a></li>*/
/* 	          </ul>*/
/* 	          {% if currentUser %}*/
/* 	          	<p class="pull-right">Logged in as <a href="#">{{ currentUser.getFullName() }}</a></p>*/
/* 	          {% endif %}*/
/*         {% endblock navbar %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="container-fluid">*/
/*       <div class="row-fluid">*/
/*         <div class="span3">*/
/* 		{% use "base/sidebar.twig" %}*/
/*           {% block sidebar %}*/
/*         	{{ parent() }}*/
/*         */
/*        	{% endblock sidebar %}*/
/*         </div><!--/span-->*/
/*         <div class="span9">*/
/*         {% if flash %}*/
/*         	{% include "base/components/flash.twig" %}*/
/*         {% endif %}*/
/*         {% block content %}*/
/*           <div class="hero-unit">*/
/*             <h1>Hello, world!</h1>*/
/*             <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>*/
/*             <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>*/
/*           </div>*/
/*           <div class="row-fluid">*/
/*             <div class="span4">*/
/*               <h2>Heading</h2>*/
/*               <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*               <p><a class="btn" href="#">View details &raquo;</a></p>*/
/*             </div><!--/span-->*/
/*             <div class="span4">*/
/*               <h2>Heading</h2>*/
/*               <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*               <p><a class="btn" href="#">View details &raquo;</a></p>*/
/*             </div><!--/span-->*/
/*             <div class="span4">*/
/*               <h2>Heading</h2>*/
/*               <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*               <p><a class="btn" href="#">View details &raquo;</a></p>*/
/*             </div><!--/span-->*/
/*           </div><!--/row-->*/
/*           <div class="row-fluid">*/
/*             <div class="span4">*/
/*               <h2>Heading</h2>*/
/*               <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*               <p><a class="btn" href="#">View details &raquo;</a></p>*/
/*             </div><!--/span-->*/
/*             <div class="span4">*/
/*               <h2>Heading</h2>*/
/*               <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*               <p><a class="btn" href="#">View details &raquo;</a></p>*/
/*             </div><!--/span-->*/
/*             <div class="span4">*/
/*               <h2>Heading</h2>*/
/*               <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*               <p><a class="btn" href="#">View details &raquo;</a></p>*/
/*             </div><!--/span-->*/
/*           </div><!--/row-->*/
/*           {% endblock content %}*/
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
