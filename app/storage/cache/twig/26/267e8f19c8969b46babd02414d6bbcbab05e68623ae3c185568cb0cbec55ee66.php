<?php

/* base/components/head.twig */
class __TwigTemplate_f6c704317269758998fc958e7bb7b39dabe3295b63d54efaa30e66d277fb6c9d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appPage"]) ? $context["appPage"] : null), "title", array()), "html", null, true);
        echo "</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appPage"]) ? $context["appPage"] : null), "description", array()), "html", null, true);
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appPage"]) ? $context["appPage"] : null), "keywords", array()), "html", null, true);
        echo "\">
<meta name=\"author\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appPage"]) ? $context["appPage"] : null), "author", array()), "html", null, true);
        echo "\">

<!-- CSS styles -->
";
        // line 9
        $this->loadTemplate("base/components/stylesheets.twig", "base/components/head.twig", 9)->display($context);
        // line 10
        echo "
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
<![endif]-->

<!-- icons for mobile -->
<!-- For IE 9 and below. ICO should be 32x32 pixels in size -->
<!--[if IE]><link rel=\"shortcut icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["assetUri"]) ? $context["assetUri"] : null), "html", null, true);
        echo "/images/sys/favicon.ico\"><![endif]-->

<!-- Touch Icons - iOS and Android 2.1+ 180x180 pixels in size. -->
<link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["assetUri"]) ? $context["assetUri"] : null), "html", null, true);
        echo "/images/sys/apple-touch-icon-precomposed.png\">

<!-- Firefox, Chrome, Safari, IE 11+ and Opera. 196x196 pixels in size. -->
<link rel=\"icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["assetUri"]) ? $context["assetUri"] : null), "html", null, true);
        echo "/images/sys/favicon.png\">";
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
        return array (  65 => 24,  59 => 21,  53 => 18,  43 => 10,  41 => 9,  35 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <meta charset="utf-8">*/
/* <title>{{ appPage.title  }}</title>*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* <meta name="description" content="{{ appPage.description }}">*/
/* <meta name="keywords" content="{{ appPage.keywords }}">*/
/* <meta name="author" content="{{ appPage.author }}">*/
/* */
/* <!-- CSS styles -->*/
/* {% include "base/components/stylesheets.twig" %}*/
/* */
/* <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->*/
/* <!--[if lt IE 9]>*/
/* <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/* <![endif]-->*/
/* */
/* <!-- icons for mobile -->*/
/* <!-- For IE 9 and below. ICO should be 32x32 pixels in size -->*/
/* <!--[if IE]><link rel="shortcut icon" href="{{ assetUri }}/images/sys/favicon.ico"><![endif]-->*/
/* */
/* <!-- Touch Icons - iOS and Android 2.1+ 180x180 pixels in size. -->*/
/* <link rel="apple-touch-icon-precomposed" href="{{ assetUri }}/images/sys/apple-touch-icon-precomposed.png">*/
/* */
/* <!-- Firefox, Chrome, Safari, IE 11+ and Opera. 196x196 pixels in size. -->*/
/* <link rel="icon" href="{{ assetUri }}/images/sys/favicon.png">*/
