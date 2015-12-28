<?php

/* base/components/flash.twig */
class __TwigTemplate_2b9a6a6dbb24eb143929aef57954c1b8dd14551c974fdce76d7dd212a89dbbac extends Twig_Template
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
        $context["__internal_b52c87275164a83cf4cedeaefd3b1e92a4966e5fe2032e6e2b7e227bae0d1faa"] = $this->loadTemplate("macros/bootstrap.twig", "base/components/flash.twig", 1);
        // line 2
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "success", array())) {
            // line 3
            echo "\t";
            echo $context["__internal_b52c87275164a83cf4cedeaefd3b1e92a4966e5fe2032e6e2b7e227bae0d1faa"]->getalert($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "success", array()), "success");
            echo "
";
        }
        // line 5
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error", array())) {
            // line 6
            echo "\t";
            echo $context["__internal_b52c87275164a83cf4cedeaefd3b1e92a4966e5fe2032e6e2b7e227bae0d1faa"]->getalert($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error", array()), "error");
            echo "
";
        }
        // line 8
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "warning", array())) {
            // line 9
            echo "\t";
            echo $context["__internal_b52c87275164a83cf4cedeaefd3b1e92a4966e5fe2032e6e2b7e227bae0d1faa"]->getalert($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "warning", array()), "warning");
            echo "
";
        }
        // line 11
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info", array())) {
            // line 12
            echo "\t";
            echo $context["__internal_b52c87275164a83cf4cedeaefd3b1e92a4966e5fe2032e6e2b7e227bae0d1faa"]->getalert($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info", array()), "info");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "base/components/flash.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  45 => 11,  39 => 9,  37 => 8,  31 => 6,  29 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% from "macros/bootstrap.twig" import alert as alert %}*/
/* {% if flash.success %}*/
/* 	{{ alert(flash.success, 'success') }}*/
/* {% endif %}*/
/* {% if flash.error %}*/
/* 	{{ alert(flash.error, 'error') }}*/
/* {% endif %}*/
/* {% if flash.warning %}*/
/* 	{{ alert(flash.warning, 'warning') }}*/
/* {% endif %}*/
/* {% if flash.info %}*/
/* 	{{ alert(flash.info, 'info') }}*/
/* {% endif %}*/
