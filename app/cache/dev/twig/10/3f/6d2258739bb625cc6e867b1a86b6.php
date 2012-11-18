<?php

/* QuindimotosProyectoBundle:Default:index.html.twig */
class __TwigTemplate_103f6d2258739bb625cc6e867b1a86b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("QuindimotosProyectoBundle::template.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "QuindimotosProyectoBundle::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "EJEMPLO DE PRUEBAS";
    }

    public function getTemplateName()
    {
        return "QuindimotosProyectoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,);
    }
}
