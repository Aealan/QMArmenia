<?php

/* QuindimotosProyectoBundle::template.html.twig */
class __TwigTemplate_c09d2bb1651d37f19ac1c58b622a0951 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'javascripts' => array($this, 'block_javascripts'),
            'informacionUser' => array($this, 'block_informacionUser'),
            'contenido' => array($this, 'block_contenido'),
            'notifications' => array($this, 'block_notifications'),
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "

         ";
        // line 8
        $this->displayBlock('menu', $context, $blocks);
        // line 158
        echo "


                <section class=\"box\" id=\"infoCli\">


    ";
        // line 164
        $this->displayBlock('informacionUser', $context, $blocks);
        // line 189
        echo "

            </section>


            <div class=\"clear\"></div> <!-- End .clear -->
            <div class=\"content-box\"><!-- Start Content Box -->
                <div class=\"content-box-header\">

                    <h3>CONTENIDO</h3>\t\t\t\t\t\t\t\t\t\t\t\t
                    <div class=\"clear\"></div>

                </div> <!-- End .content-box-header -->
                <div class=\"content-box-micontenido\">
                    <section class=\"box\" id=\"contenido\"> 
                               ";
        // line 204
        $this->displayBlock('contenido', $context, $blocks);
        // line 207
        echo "                            </section>
\t\t\t";
        // line 454
        echo "                        </div> <!-- End .content-box-content -->
                    </div> <!-- End .content-box-content -->  



                    <section id=\"notifications\"> 
        ";
        // line 460
        $this->displayBlock('notifications', $context, $blocks);
        // line 493
        echo "                        </section>

                        <footer class=\"box\">
                            <p></p>
                            <div id=\"footer\">
                                <small> 
                                    &#169;Copyright 2012 - proyectoS3 | Powered by <a href=\"\">DobleLLE</a> | <a href=\"#\">Top</a>
                                </small>
                            </div><!-- End #footer -->
                        </footer>
                    </div>


            ";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        echo " 

<div id=\"body-wrapper\"> <!-- Wrapper for the radial gradient background -->

    <div id=\"sidebar\">
        <div id=\"sidebar-wrapper\"> <!-- Sidebar with logo and menu -->

            <h1 id=\"sidebar-title\"><a href=\"#\"></a></h1>

            <!-- Logo (221px wide) -->
            <a href=\"#\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/QuindimotosProyecto/images/textoQuindimotos.png"), "html", null, true);
        echo "\" alt=\"QUINDIMOTOS logo\" width=\"221\" id=\"logo\" /></a>

            <!-- Sidebar Profile links -->
            <div id=\"profile-links\">
                Hola, ";
        // line 22
        echo "usuario";
        echo "<a href=\"#\" title=\"Edit your profile\"></a>";
        echo "<br />
                <br />
\t\t\t\t";
        // line 24
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
        echo "\" title=\"Salir\">Salir</a>
            </div>        

            <ul id=\"main-nav\">  <!-- Accordion Menu -->
                ";
        // line 28
        if ($this->env->getExtension('security')->isGranted("ROLE_SECRETARIA")) {
            // line 29
            echo "                <li>
                    <a  href=\"#\" class=\"nav-top-item \"> <!-- Add the class \"no-submenu\" to menu items with no sub menu -->
                        gestionar Solicitud
                        </a>    
                        <ul>
                              <li><a id=\"link_registrar\" href=\"#\">Registrar Solicitud </a></li>
                              <li><a href=\"#\">Registrar y Notificar Eventualidades</a></li>
\t\t\t</ul>
                        
                       
                </li>
                    <li>
                        <a id=\"link_tecnDisp\" href=\"#\" class=\"nav-top-item no-submenu\"> <!-- Add the class \"no-submenu\" to menu items with no sub menu -->
                            Tecnicos Disponibles 
                        </a>       
                    </li>
                    
                    <li>
                        <a id=\"link_regAndN\" href=\"#\" class=\"nav-top-item no-submenu\"> <!-- Add the class \"no-submenu\" to menu items with no sub menu -->
                            Registrar y Notificar Eventualidades 
                        </a>       
                    </li>
                ";
        }
        // line 52
        echo "                 ";
        if ($this->env->getExtension('security')->isGranted("ROLE_TECNICO")) {
            // line 53
            echo "                 <li>
                          <a id=\"link_tecnDisp\" href=\"#\" class=\"nav-top-item no-submenu\"> <!-- Add the class \"no-submenu\" to menu items with no sub menu -->
                            Tecnicos Disponibles 
                        </a>       
                    </li>
                    
                    <li>
                        <a id=\"link_regAndN\" href=\"#\" class=\"nav-top-item no-submenu\"> <!-- Add the class \"no-submenu\" to menu items with no sub menu -->
                            Registrar y Notificar Eventualidades 
                        </a>       
                    </li>
                    ";
        }
        // line 65
        echo "\t\t\t\t       
               
               
                 ";
        // line 68
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 69
            echo "                   <li>
                    <a  href=\"#\" class=\"nav-top-item \"> <!-- Add the class \"no-submenu\" to menu items with no sub menu -->
                        gestionar Solicitud
                        </a>    
                        <ul>
                              <li><a id=\"link_registrar\" href=\"#\">Registrar Solicitud </a></li>
                              <li><a href=\"#\">Registrar y Notificar Eventualidades</a></li>
\t\t\t</ul>
                       
                    </li>
                    <li>
                        <a id=\"link_tecnDisp\" href=\"#\" class=\"nav-top-item no-submenu\"> <!-- Add the class \"no-submenu\" to menu items with no sub menu -->
                            Tecnicos Disponibles 
                        </a>       
                    </li>
                    
                    <li>
                        <a id=\"link_regAndN\" href=\"#\" class=\"nav-top-item no-submenu\"> <!-- Add the class \"no-submenu\" to menu items with no sub menu -->
                            Registrar y Notificar Eventualidades 
                        </a>       
                    </li>
                    <li>
                        <a id=\"link_regUser\" href=\"#\" class=\"nav-top-item no-submenu\"> <!-- Add the class \"no-submenu\" to menu items with no sub menu -->
                            Registrar Usuarios del Sistema 
                        </a>       
                    </li>
                    ";
        }
        // line 95
        echo "  
                    
                 
                   
                ";
        // line 99
        $this->displayBlock('javascripts', $context, $blocks);
        // line 127
        echo "

\t\t\t\t";
        // line 153
        echo "                                ";
        // line 154
        echo "\t\t\t\t";
        // line 155
        echo "                </ul> <!-- End #main-nav -->

                 ";
    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        // line 100
        echo "                    
                <script>

                \$(document).ready(function(){
                        \$('#link_registrar').click(function(){
                                \$('#contenido').load('";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("QUINDI_RegistarSolicitud"), "html", null, true);
        echo "');
                        });
                });
                \$(document).ready(function(){
                        \$('#link_tecnDisp').click(function(){
                                \$('#contenido').load('";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("QUINDI_tecnicosDisponibles"), "html", null, true);
        echo "');
                        });
                });
                \$(document).ready(function(){
                        \$('#link_regAndN').click(function(){
                                \$('#contenido').load('";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("QUINDI_regAndN"), "html", null, true);
        echo "');
                        });
                });
                \$(document).ready(function(){
                        \$('#link_regUser').click(function(){
                                \$('#contenido').load('";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("QUINDI_regUser"), "html", null, true);
        echo "');
                        });
                });
                

                </script>
                ";
    }

    // line 164
    public function block_informacionUser($context, array $blocks = array())
    {
        echo "   




            </div>
        </div> <!-- End #sidebar -->

        <div id=\"main-content\"> <!-- Main Content Section with everything -->

            <noscript> <!-- Show a notification if the user has disabled javascript -->
            <div class=\"notification error png_bg\">
                <div>
                    Javascript is disabled or is not supported by your browser. Please <a href=\"http://browsehappy.com/\" title=\"Upgrade to a better browser\">upgrade</a> your browser or <a href=\"http://www.google.com/support/bin/answer.py?answer=23852\" title=\"Enable Javascript in your browser\">enable</a> Javascript to navigate the interface properly.
                </div>
            </div>
            </noscript>

            <!-- Page Head -->
            <h2>Bienvenido John</h2>
        ";
        // line 185
        echo "


     ";
    }

    // line 204
    public function block_contenido($context, array $blocks = array())
    {
        // line 205
        echo "                            <center><img style=\"padding: 200px\"src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/QuindimotosProyecto/images/textoQuindimotos.png"), "html", null, true);
        echo "\" alt=\"QUINDIMOTOS logo\" width=\"221\" id=\"logo\" /></center>
                               ";
    }

    // line 460
    public function block_notifications($context, array $blocks = array())
    {
        // line 461
        echo "       ";
        // line 492
        echo "        ";
    }

    public function getTemplateName()
    {
        return "QuindimotosProyectoBundle::template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 492,  325 => 461,  322 => 460,  315 => 205,  312 => 204,  305 => 185,  281 => 164,  270 => 120,  262 => 115,  254 => 110,  246 => 105,  239 => 100,  236 => 99,  230 => 155,  228 => 154,  226 => 153,  222 => 127,  220 => 99,  214 => 95,  185 => 69,  183 => 68,  178 => 65,  164 => 53,  161 => 52,  136 => 29,  134 => 28,  126 => 24,  120 => 22,  113 => 18,  99 => 8,  82 => 493,  80 => 460,  72 => 454,  69 => 207,  67 => 204,  50 => 189,  48 => 164,  40 => 158,  38 => 8,  34 => 6,  31 => 5,);
    }
}
