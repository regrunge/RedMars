<?php

/* base/sidebar.twig */
class __TwigTemplate_f223622d360dc13489f157ed5989d4d8f0b7580db1b2a71b3112828cef9d09eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sidebar', $context, $blocks);
    }

    public function block_sidebar($context, array $blocks = array())
    {
        // line 2
        echo "\t<div class=\"well sidebar-nav\">
            <ul class=\"nav nav-list\">
            \t<li class=\"nav-header\">Documentation</li>
\t          ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pmenu"]) ? $context["pmenu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            echo " 
\t          \t<li ";
            // line 6
            echo (($this->getAttribute($context["link"], "active", array())) ? ("class=\"active\"") : (""));
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "desc", array()), "html", null, true);
            echo "</a></li>
\t          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "            </ul>
        </div><!--/.well -->
        
        <div class=\"well sidebar-nav\">
            <ul class=\"nav nav-list\">
            \t<li class=\"nav-header\">Installation</li>
\t          ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["smenu"]) ? $context["smenu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            echo " 
\t          \t<li ";
            // line 15
            echo (($this->getAttribute($context["link"], "active", array())) ? ("class=\"active\"") : (""));
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "desc", array()), "html", null, true);
            echo "</a></li>
\t          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </ul>
        </div><!--/.well -->
";
    }

    public function getTemplateName()
    {
        return "base/sidebar.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  63 => 15,  57 => 14,  49 => 8,  37 => 6,  31 => 5,  26 => 2,  20 => 1,);
    }
}
/* {% block sidebar %}*/
/* 	<div class="well sidebar-nav">*/
/*             <ul class="nav nav-list">*/
/*             	<li class="nav-header">Documentation</li>*/
/* 	          {% for link in pmenu %} */
/* 	          	<li {{ link.active ? 'class="active"' : '' }}><a href="{{ link.url }}">{{ link.desc }}</a></li>*/
/* 	          {% endfor %}*/
/*             </ul>*/
/*         </div><!--/.well -->*/
/*         */
/*         <div class="well sidebar-nav">*/
/*             <ul class="nav nav-list">*/
/*             	<li class="nav-header">Installation</li>*/
/* 	          {% for link in smenu %} */
/* 	          	<li {{ link.active ? 'class="active"' : '' }}><a href="{{ link.url }}">{{ link.desc }}</a></li>*/
/* 	          {% endfor %}*/
/*             </ul>*/
/*         </div><!--/.well -->*/
/* {% endblock sidebar %}*/
