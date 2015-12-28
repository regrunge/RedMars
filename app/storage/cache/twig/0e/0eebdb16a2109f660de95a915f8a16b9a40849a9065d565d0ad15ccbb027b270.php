<?php

/* base/components/javascripts.twig */
class __TwigTemplate_ffeda53df74ff90f5f9ed054edfdc1f574f8cb9f019f5709a0dcd54ed7d2227f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = array())
    {
        // line 2
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["assetUri"]) ? $context["assetUri"] : null), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>

    <!-- CUSTOM jQuery with no Conflict wrap -->
    <script type=\"text/javascript\">
        jQuery(function(\$) {
            ";
        // line 8
        $this->loadTemplate("base/components/custom.js.twig", "base/components/javascripts.twig", 8)->display($context);
        // line 9
        echo "        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "base/components/javascripts.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  37 => 8,  29 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% block javascripts %}*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*     <script src="{{ assetUri }}/js/bootstrap.min.js"></script>*/
/* */
/*     <!-- CUSTOM jQuery with no Conflict wrap -->*/
/*     <script type="text/javascript">*/
/*         jQuery(function($) {*/
/*             {% include "base/components/custom.js.twig" %}*/
/*         });*/
/*     </script>*/
/* {% endblock javascripts %}*/
