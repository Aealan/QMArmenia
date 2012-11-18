<?php

namespace Quindimotos\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

  class DefaultController extends Controller
    {
        
        public function indexAction()
        {
            
        /* $em = $this->getDoctrine()->getManager();

             $entities = $em->getRepository('QuindimotosProyectoBundle:Role')->findAll();#}*/
            
            
            return $this->render('QuindimotosProyectoBundle:Default:index.html.twig');/* array('entities' => $entities ));*/
        }
        
         public function enConstrucionAction()
        {
            
        /* $em = $this->getDoctrine()->getManager();

             $entities = $em->getRepository('QuindimotosProyectoBundle:Role')->findAll();#}*/
            
            
            return $this->render('QuindimotosProyectoBundle:Default:enconstruccion.html.twig');/* array('entities' => $entities ));*/
        }
        
    }