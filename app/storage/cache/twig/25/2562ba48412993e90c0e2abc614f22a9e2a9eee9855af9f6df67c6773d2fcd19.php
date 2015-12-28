<?php

/* base/javascripts.twig */
class __TwigTemplate_47b5f40f0835e84ef053ffa10dd0defe7a39bea87e133bcd5a6878f352e8271d extends Twig_Template
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
        echo "
";
    }

    public function getTemplateName()
    {
        return "base/javascripts.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }
}
/* {% block javascripts %}*/
/* */
/* {% endblock javascripts %}*/
