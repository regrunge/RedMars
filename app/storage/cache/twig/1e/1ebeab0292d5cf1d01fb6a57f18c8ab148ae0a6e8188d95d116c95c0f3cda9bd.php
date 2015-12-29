<?php

/* demo.html.twig */
class __TwigTemplate_4d8c2653fb1bda2c42eff84a9d10d5b169ddde231ef4634d19e58b64938b3693 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "demo.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Welcome to RedMars.</h1>
    <h2>A PHP bootstrap with all you can ever need.</h2>
    <h3>Intro</h3>
    <p>
        This Framework is based on the wonderful <a target=\"_blank\" href=\"https://github.com/vanting/RedSlim\">RedSlim</a>. It was a fork as initially I just needed to update Bootstrap to version 3, but with time too many things have changed and now it should probably be mantained on its own repo.
    </p>
    <h3>Description</h3>
    <p>
        This framework is a collection of micro-frameworks, all well documented, well tested and amazing to use. If you know OOP PHP (or if you would like to learn it) and if you want to have full control on any line of code this is for you.
    </p>
    <p>
        RedMars includes:
        <ul>
            <li>Slim framework for the MVC/routing,</li>
            <li>it handles database ORM with RedBeanPHP,</li>
            <li>templating with Twig</li>
            <li>UI, CSS and basic JS effects with Twitter Bootstrap (version 3)</li>
            <li>and it includes jQuery for your JavaScript things</li>
            <li>plus http://summernote.org/ for the wysiwyg</li>
        </ul>
    </p>
    <div id=\"summernote\">

    </div>
    <button class=\"btn btn-block btn-primary\" id=\"summernoteSubmit\">SEND!</button>
    <div id=\"preview\"></div>
";
    }

    public function getTemplateName()
    {
        return "demo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base/base.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <h1>Welcome to RedMars.</h1>*/
/*     <h2>A PHP bootstrap with all you can ever need.</h2>*/
/*     <h3>Intro</h3>*/
/*     <p>*/
/*         This Framework is based on the wonderful <a target="_blank" href="https://github.com/vanting/RedSlim">RedSlim</a>. It was a fork as initially I just needed to update Bootstrap to version 3, but with time too many things have changed and now it should probably be mantained on its own repo.*/
/*     </p>*/
/*     <h3>Description</h3>*/
/*     <p>*/
/*         This framework is a collection of micro-frameworks, all well documented, well tested and amazing to use. If you know OOP PHP (or if you would like to learn it) and if you want to have full control on any line of code this is for you.*/
/*     </p>*/
/*     <p>*/
/*         RedMars includes:*/
/*         <ul>*/
/*             <li>Slim framework for the MVC/routing,</li>*/
/*             <li>it handles database ORM with RedBeanPHP,</li>*/
/*             <li>templating with Twig</li>*/
/*             <li>UI, CSS and basic JS effects with Twitter Bootstrap (version 3)</li>*/
/*             <li>and it includes jQuery for your JavaScript things</li>*/
/*             <li>plus http://summernote.org/ for the wysiwyg</li>*/
/*         </ul>*/
/*     </p>*/
/*     <div id="summernote">*/
/* */
/*     </div>*/
/*     <button class="btn btn-block btn-primary" id="summernoteSubmit">SEND!</button>*/
/*     <div id="preview"></div>*/
/* {% endblock content %}*/
/* */
