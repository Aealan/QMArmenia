<?php

/* UserBundle:Inventariomoto:index.html.twig */
class __TwigTemplate_8c23263bde182d71e8abb549da91e5c8 extends Twig_Template
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
        echo "<h1>Inventariomoto list</h1>

<table class=\"records_list\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Espejos</th>
            <th>Direccionales</th>
            <th>Tapaslaterales</th>
            <th>Sillin</th>
            <th>Tabacos</th>
            <th>Stop</th>
            <th>Gatos</th>
            <th>Reflectivas</th>
            <th>Tapatanqueaceite</th>
            <th>Emblemas</th>
            <th>Parrillas</th>
            <th>Luzdelantera</th>
            <th>Pito</th>
            <th>Bateria</th>
            <th>Velocimetro</th>
            <th>Guardafango</th>
            <th>Juegodeherramientas</th>
            <th>Llaves</th>
            <th>Tanque</th>
            <th>Manual</th>
            <th>Llantas</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 33
            echo "        <tr>
            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inventariomoto_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "espejos"), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "direccionales"), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tapaslaterales"), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "sillin"), "html", null, true);
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tabacos"), "html", null, true);
            echo "</td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "stop"), "html", null, true);
            echo "</td>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gatos"), "html", null, true);
            echo "</td>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "reflectivas"), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tapatanqueaceite"), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "emblemas"), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "parrillas"), "html", null, true);
            echo "</td>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "luzdelantera"), "html", null, true);
            echo "</td>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "pito"), "html", null, true);
            echo "</td>
            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "bateria"), "html", null, true);
            echo "</td>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "velocimetro"), "html", null, true);
            echo "</td>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "guardafango"), "html", null, true);
            echo "</td>
            <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "juegodeherramientas"), "html", null, true);
            echo "</td>
            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "llaves"), "html", null, true);
            echo "</td>
            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tanque"), "html", null, true);
            echo "</td>
            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "manual"), "html", null, true);
            echo "</td>
            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "llantas"), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inventariomoto_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inventariomoto_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 68
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inventariomoto_new"), "html", null, true);
        echo "\">
            Create a new entry
  



        </a>
    </li>
</ul>


    ";
        // line 84
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 85
            echo "     ";
            if ((0 == $this->getContext($context, "i") % 2)) {
                // line 86
                echo "    ";
                echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                echo "
    ";
            }
            // line 88
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 89
        echo "    ";
    }

    public function getTemplateName()
    {
        return "UserBundle:Inventariomoto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 89,  202 => 88,  196 => 86,  193 => 85,  189 => 84,  175 => 73,  168 => 68,  156 => 62,  150 => 59,  143 => 55,  139 => 54,  135 => 53,  131 => 52,  127 => 51,  123 => 50,  119 => 49,  115 => 48,  111 => 47,  107 => 46,  103 => 45,  99 => 44,  95 => 43,  91 => 42,  87 => 41,  83 => 40,  79 => 39,  75 => 38,  71 => 37,  67 => 36,  63 => 35,  57 => 34,  54 => 33,  50 => 32,  17 => 1,);
    }
}
