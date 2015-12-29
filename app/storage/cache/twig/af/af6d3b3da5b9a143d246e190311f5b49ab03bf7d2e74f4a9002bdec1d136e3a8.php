<?php

/* base/components/stylesheets.twig */
class __TwigTemplate_c92029e669770eb538f8b935fb160239fe78fca7262788610ca04d78ce30ff5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "    <link href=\"http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["assetUri"]) ? $context["assetUri"] : null), "html", null, true);
        echo "/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["assetUri"]) ? $context["assetUri"] : null), "html", null, true);
        echo "/css/bootstrap-theme.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["assetUri"]) ? $context["assetUri"] : null), "html", null, true);
        echo "/css/mars-theme.css\">
    <link href=\"http://cdnjs.cloudflare.com/ajax/libs/summernote/0.7.0/summernote.css\" rel=\"stylesheet\">

    <!-- CUSTOM CSS below this line -->
    <style type=\"text/css\">

    </style>

";
    }

    public function getTemplateName()
    {
        return "base/components/stylesheets.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  33 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% block stylesheets %}*/
/*     <link href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">*/
/* 	<link rel="stylesheet" href="{{ assetUri }}/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="{{ assetUri }}/css/bootstrap-theme.min.css">*/
/*     <link rel="stylesheet" href="{{ assetUri }}/css/mars-theme.css">*/
/*     <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.7.0/summernote.css" rel="stylesheet">*/
/* */
/*     <!-- CUSTOM CSS below this line -->*/
/*     <style type="text/css">*/
/* */
/*     </style>*/
/* */
/* {% endblock stylesheets %}*/
