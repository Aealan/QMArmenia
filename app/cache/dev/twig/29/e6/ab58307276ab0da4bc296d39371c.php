<?php

/* ::base.html.twig */
class __TwigTemplate_29e6ab58307276ab0da4bc296d39371c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
        <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/QuindimotosProyecto/js/jquery-1.3.2.min.js"), "html", null, true);
        echo " \"></script>
        <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/QuindimotosProyecto/js/simpla.jquery.configuration.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/QuindimotosProyecto/js/facebox.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/QuindimotosProyecto/js/jquery.wysiwyg.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/QuindimotosProyecto/js/jquery.datePicker.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/QuindimotosProyecto/js/jquery.date.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/QuindimotosProyecto/css/reset.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/QuindimotosProyecto/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/QuindimotosProyecto/css/invalid.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />\t
       
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
        <title>";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
        
    <body>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "   </body>
    </html>
";
    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 24,  97 => 23,  91 => 17,  85 => 25,  73 => 19,  68 => 17,  64 => 16,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  43 => 10,  39 => 9,  35 => 8,  27 => 6,  20 => 1,  327 => 490,  325 => 459,  322 => 458,  315 => 203,  312 => 202,  305 => 183,  281 => 162,  270 => 118,  262 => 113,  254 => 108,  246 => 103,  239 => 98,  236 => 97,  230 => 153,  228 => 152,  226 => 151,  222 => 125,  220 => 97,  214 => 93,  185 => 67,  183 => 66,  178 => 63,  164 => 51,  161 => 50,  136 => 27,  134 => 26,  126 => 22,  120 => 20,  113 => 16,  99 => 6,  82 => 24,  80 => 23,  72 => 452,  69 => 205,  67 => 202,  50 => 187,  48 => 162,  40 => 156,  38 => 6,  34 => 4,  31 => 7,  26 => 3,);
    }
}
