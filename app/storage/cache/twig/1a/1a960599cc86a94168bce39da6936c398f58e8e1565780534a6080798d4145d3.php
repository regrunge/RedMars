<?php

/* base/stylesheets.twig */
class __TwigTemplate_5abb6c04004f582cb44f2eda3fc08769cc9e594c93b6777c59160d181b8f42ad extends Twig_Template
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
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["assetUri"]) ? $context["assetUri"] : null), "html", null, true);
        echo "/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["assetUri"]) ? $context["assetUri"] : null), "html", null, true);
        echo "/css/bootstrap-responsive.min.css\">

";
    }

    public function getTemplateName()
    {
        return "base/stylesheets.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% block stylesheets %}*/
/* */
/* 	<link rel="stylesheet" href="{{ assetUri }}/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="{{ assetUri }}/css/bootstrap-responsive.min.css">*/
/* */
/* {% endblock stylesheets %}*/
