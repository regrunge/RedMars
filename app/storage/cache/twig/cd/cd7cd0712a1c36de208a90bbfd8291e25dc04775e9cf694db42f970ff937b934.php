<?php

/* base/components/sidebar.twig */
class __TwigTemplate_74e65f2c4e4c9f203c38d32c40ca7d417b4078c6917c83c5fb997b1aeee88a92 extends Twig_Template
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
        echo "Documentation
<div class=\"list-group\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pmenu"]) ? $context["pmenu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 4
            echo "        <a class=\"list-group-item ";
            echo (($this->getAttribute($context["link"], "active", array())) ? ("active") : (""));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "url", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "desc", array()), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</div>

Installation
<div class=\"list-group\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["smenu"]) ? $context["smenu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 11
            echo "        <a class=\"list-group-item ";
            echo (($this->getAttribute($context["link"], "active", array())) ? ("active") : (""));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "url", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "desc", array()), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "base/components/sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  50 => 11,  46 => 10,  40 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* Documentation*/
/* <div class="list-group">*/
/*     {% for link in pmenu %}*/
/*         <a class="list-group-item {{ link.active ? 'active' : '' }}" href="{{ link.url }}" target="_blank">{{ link.desc }}</a>*/
/*     {% endfor %}*/
/* </div>*/
/* */
/* Installation*/
/* <div class="list-group">*/
/*     {% for link in smenu %}*/
/*         <a class="list-group-item {{ link.active ? 'active' : '' }}" href="{{ link.url }}" target="_blank">{{ link.desc }}</a>*/
/*     {% endfor %}*/
/* </div>*/
/* */
