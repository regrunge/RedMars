<?php

/* base/base.html.twig */
class __TwigTemplate_1986536ea578820dbbc706c7fd2480f54f30f2ad7d23f9fac78562454972e939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <!-- ALL head info have been moved in head.twig -->
        ";
        // line 5
        $this->loadTemplate("base/components/head.twig", "base/base.html.twig", 5)->display($context);
        // line 6
        echo "    </head>

    <body>
        <div class=\"container\">
            <!-- the NAVBAR have been moved in navbar.twig -->
            ";
        // line 11
        $this->loadTemplate("base/components/navbar.twig", "base/base.html.twig", 11)->display($context);
        // line 12
        echo "
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <!-- the SIDEBAR have been moved in sidebar.twig -->
                    ";
        // line 16
        $this->loadTemplate("base/components/sidebar.twig", "base/base.html.twig", 16)->display($context);
        // line 17
        echo "                </div>
                <div class=\"col-lg-8\">
                    <!-- this is the central content overwrite it extending this template -->
                    ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "                </div>
            </div>
            <div class=\"row\">
                ";
        // line 26
        $this->loadTemplate("base/components/footer.twig", "base/base.html.twig", 26)->display($context);
        // line 27
        echo "            </div>
        </div>
        <!-- JavaScript at the end, to speed up loading -->
        ";
        // line 30
        $this->loadTemplate("base/components/javascripts.twig", "base/base.html.twig", 30)->display($context);
        // line 31
        echo "
    </body>
</html>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "base/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  73 => 20,  66 => 31,  64 => 30,  59 => 27,  57 => 26,  52 => 23,  50 => 20,  45 => 17,  43 => 16,  37 => 12,  35 => 11,  28 => 6,  26 => 5,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <!-- ALL head info have been moved in head.twig -->*/
/*         {% include "base/components/head.twig" %}*/
/*     </head>*/
/* */
/*     <body>*/
/*         <div class="container">*/
/*             <!-- the NAVBAR have been moved in navbar.twig -->*/
/*             {% include "base/components/navbar.twig" %}*/
/* */
/*             <div class="row">*/
/*                 <div class="col-lg-4">*/
/*                     <!-- the SIDEBAR have been moved in sidebar.twig -->*/
/*                     {% include "base/components/sidebar.twig" %}*/
/*                 </div>*/
/*                 <div class="col-lg-8">*/
/*                     <!-- this is the central content overwrite it extending this template -->*/
/*                     {% block content %}*/
/* */
/*                     {% endblock content %}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 {% include "base/components/footer.twig" %}*/
/*             </div>*/
/*         </div>*/
/*         <!-- JavaScript at the end, to speed up loading -->*/
/*         {% include "base/components/javascripts.twig" %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
