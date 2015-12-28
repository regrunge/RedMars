<?php

/* base/components/head.twig */
class __TwigTemplate_8ce488f52943034a362172f0f11878bc3dbaaaa390b52b8250ec5cc4f56cc7d3 extends Twig_Template
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
        // line 1
        echo "<meta charset=\"utf-8\">
<title>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "getName", array(), "method"), "html", null, true);
        echo "</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">

<!-- CSS styles -->
";
        // line 8
        $this->loadTemplate("base/components/stylesheets.twig", "base/components/head.twig", 8)->display($context);
        // line 9
        echo "
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
<![endif]-->";
    }

    public function getTemplateName()
    {
        return "base/components/head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 9,  31 => 8,  22 => 2,  19 => 1,);
    }
}
/* <meta charset="utf-8">*/
/* <title>{{ app.getName()  }}</title>*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* <meta name="description" content="">*/
/* <meta name="author" content="">*/
/* */
/* <!-- CSS styles -->*/
/* {% include "base/components/stylesheets.twig" %}*/
/* */
/* <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->*/
/* <!--[if lt IE 9]>*/
/* <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/* <![endif]-->*/
