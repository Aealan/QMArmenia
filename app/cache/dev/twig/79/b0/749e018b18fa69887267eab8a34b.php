<?php

/* QuindimotosProyectoBundle:Cliente:new.html.twig */
class __TwigTemplate_79b0749e018b18fa69887267eab8a34b extends Twig_Template
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
        echo "<div>
<h1>Cliente creation</h1>

<form action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
        
        <option value=“0“>seleccione...</option>
";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ciudades"));
        foreach ($context['_seq'] as $context["_key"] => $context["ciudad"]) {
            // line 9
            echo "<option value=“";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ciudad"), "id"), "html", null, true);
            echo "“>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ciudad"), "nombre"), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciudad'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 11
        echo "    <p>
        <button type=\"submit\">Create</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente"), "html", null, true);
        echo "\">
            Back to the list
            
    </li>
    
</ul>
</div>
";
        // line 45
        echo "<script type=\"text/javascript\"> 
            \$(document).ready(function(){ 
               ";
        // line 47
        if ($this->getContext($context, "ciudades")) {
            echo " 
                   var cliente_ciudad = ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ciudades"), "id"), "html", null, true);
            echo "; 
                ";
        } else {
            // line 49
            echo " 
                    var cliente_ciudad = 0; 
                ";
        }
        // line 51
        echo " 

                var select_Departamento = \$('#form_departamento_departamento'); 

                if(select_Departamento.val()){ 
                    cargarCiudades(select_Departameto.val()); 
                } 

                \$('#form_departamento_departamento').change(function(event){ 
                    cargarCiudades(this.value); 
                }); 

                function cargarCiudades(departamento){ 
                    \$(\"body\").css(\"cursor\", \"progress\"); 
                    \$.ajax({ 
                        type: 'get', 
                        url: '";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajax_nivel"), "html", null, true);
        echo "', 
                        data: { 
                            id: departamento 
                        }, 
                        success: function(html) { 
                            var select_ciudad = \$('#form_departamento_ciudad');
                            ";
        // line 74
        echo "                            select_ciudad.html(html); 
                            select_ciudad.val(cliente_ciudad);
                            \$(\"body\").css(\"cursor\", \"auto\"); 
                        } 
                    }); 
                }; 
            }); 
        </script> ";
    }

    public function getTemplateName()
    {
        return "QuindimotosProyectoBundle:Cliente:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 74,  104 => 67,  86 => 51,  81 => 49,  76 => 48,  72 => 47,  68 => 45,  58 => 18,  49 => 11,  38 => 9,  34 => 8,  28 => 5,  22 => 4,  17 => 1,);
    }
}
