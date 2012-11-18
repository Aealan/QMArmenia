<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_4a111a95523a0eee23b9573613dced2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/QuindimotosProyecto/css/reset.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/QuindimotosProyecto/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/QuindimotosProyecto/css/invalid.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />\t

";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
<body id=\"login\">

    <div id=\"login-wrapper\" class=\"png_bg\">
        <div id=\"login-top\">

            ";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        // line 18
        echo "            <!-- Logo (221px width) -->
            <img id=\"logo\" src= \"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/QuindimotosProyecto/images//textoQuindimotos.png"), "html", null, true);
        echo "\" alt=\"quindimotos logo\" />
        </div> <!-- End #logn-top -->
        <div id=\"login-content\">

    ";
        // line 23
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
        </div> <!-- End #login-content -->

    </div> <!-- End #login-wrapper -->

</body>
";
    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        echo "Login!";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 17,  70 => 23,  63 => 19,  60 => 18,  58 => 17,  47 => 10,  36 => 6,  28 => 4,  79 => 29,  72 => 25,  62 => 18,  54 => 13,  50 => 11,  45 => 10,  40 => 7,  37 => 7,  31 => 5,  29 => 4,  26 => 3,);
    }
}
