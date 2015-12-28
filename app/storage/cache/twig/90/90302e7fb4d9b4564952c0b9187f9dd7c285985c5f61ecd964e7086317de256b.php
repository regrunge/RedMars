<?php

/* macros/bootstrap.twig */
class __TwigTemplate_62df530c4c1ab2aa69d80e6b22dee74e9f0368c413be897be8809d3a8335bb5f extends Twig_Template
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
        // line 12
        echo "
";
        // line 19
        echo "
";
    }

    // line 2
    public function getalert($__message__ = null, $__type__ = null, $__style__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "type" => $__type__,
            "style" => $__style__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "\t";
            if (((isset($context["message"]) ? $context["message"] : null) != "")) {
                // line 4
                echo "\t\t<div class=\"alert alert-";
                echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "success")) : ("success")), "html", null, true);
                echo " alert-block\">
\t\t\t<a class=\"close\" data-dismiss=\"alert\">×</a>
\t\t\t<span style=\"";
                // line 6
                echo twig_escape_filter($this->env, ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : null), "font-weight: bold;")) : ("font-weight: bold;")), "html", null, true);
                echo "\">
\t\t\t";
                // line 7
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "
\t\t\t</span>
\t\t</div>
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function getlabel($__message__ = null, $__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 14
            echo "\t";
            if (((isset($context["message"]) ? $context["message"] : null) == "")) {
                // line 15
                echo "\t";
            } else {
                // line 16
                echo "\t<span class=\"label label-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "</span>
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 20
    public function getbtn($__message__ = null, $__type__ = null, $__attributes__ = null, $__element__ = null, $__size__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "type" => $__type__,
            "attributes" => $__attributes__,
            "element" => $__element__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "\t<";
            echo twig_escape_filter($this->env, (isset($context["element"]) ? $context["element"] : null), "html", null, true);
            echo " class=\"btn btn-";
            echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true);
            echo " btn-";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ((array_key_exists("attributes", $context)) ? (_twig_default_filter((isset($context["attributes"]) ? $context["attributes"] : null), "")) : ("")), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, (isset($context["element"]) ? $context["element"] : null), "html", null, true);
            echo ">
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros/bootstrap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 21,  106 => 20,  89 => 16,  86 => 15,  83 => 14,  70 => 13,  54 => 7,  50 => 6,  44 => 4,  41 => 3,  27 => 2,  22 => 19,  19 => 12,);
    }
}
/* {# bootstrap specific macros#}*/
/* {% macro alert(message, type, style) %}*/
/* 	{% if message != '' %}*/
/* 		<div class="alert alert-{{ type|default('success') }} alert-block">*/
/* 			<a class="close" data-dismiss="alert">×</a>*/
/* 			<span style="{{ style|default('font-weight: bold;') }}">*/
/* 			{{ message }}*/
/* 			</span>*/
/* 		</div>*/
/* 	{% endif %}*/
/* {% endmacro %}*/
/* */
/* {% macro label(message, type) %}*/
/* 	{% if message == '' %}*/
/* 	{% else %}*/
/* 	<span class="label label-{{ type }}">{{ message }}</span>*/
/* 	{% endif %}*/
/* {% endmacro %}*/
/* */
/* {% macro btn(message, type, attributes, element, size) %}*/
/* 	<{{ element }} class="btn btn-{{ size }} btn-{{ type }}" {{ attributes|default('') }}>{{ message }}</{{ element }}>*/
/* {% endmacro %}*/
