<?php

/* QuindimotosProyectoBundle:Navegation:registrar_Solicitud.html.twig */
class __TwigTemplate_2abcde88b98dac2c6c3b79af0270395f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('contenido', $context, $blocks);
        // line 8
        echo "
";
    }

    // line 1
    public function block_contenido($context, array $blocks = array())
    {
        // line 2
        echo "

";
        // line 4
        $this->env->loadTemplate("QuindimotosProyectoBundle:Cliente:new.html.twig")->display($context);
        // line 5
        echo "

";
    }

    public function getTemplateName()
    {
        return "QuindimotosProyectoBundle:Navegation:registrar_Solicitud.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  32 => 4,  28 => 2,  25 => 1,  20 => 8,  18 => 1,);
    }
}
