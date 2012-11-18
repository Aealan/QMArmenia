<?php

namespace Quindimotos\ProyectoBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Quindimotos\ProyectoBundle\Entity\Cliente;

use Quindimotos\ProyectoBundle\Form\ClienteType;


  class NavegationController extends Controller
    {
        
        public function indexAction()
        {
            
        /* $em = $this->getDoctrine()->getManager();

             $entities = $em->getRepository('QuindimotosProyectoBundle:Role')->findAll();#}*/
            
            
            return $this->render('QuindimotosProyectoBundle:Default:index.html.twig');/* array('entities' => $entities ));*/
        }
        
         public function registarSolicitudAction()
        {
            
           // $em = $this->getDoctrine()->getManager();
          //  $entities = $em->getRepository('QuindimotosProyectoBundle:Role')->findAll();
          // $entities = $em->getRepository('QuindimotosProyectoBundle:User')->findAll();
           $entity = new Cliente();
           $form   = $this->createForm(new ClienteType(), $entity); 
           $departamento_id = $this->getRequest()->get('id');
           $ciudades = $this->getDoctrine()->getRepository('QuindimotosProyectoBundle:Ciudad')->findByDepartamento($departamento_id);
           
        
            return $this->render('QuindimotosProyectoBundle:Navegation:registrar_Solicitud.html.twig',array( 
                
                'entity' => $entity,
                'form'   => $form->createView(),
                'ciudades' => $ciudades
                    ));/* array('entities' => $entities ));*/
        }
        
        
        public function  tecnicosDisponiblesAction()
        {
            return $this->render('QuindimotosProyectoBundle:Navegation:TecnicosDisponibles.html.twig');
        }
        public function regisAndNotifyAction()
        {
            return $this->render('QuindimotosProyectoBundle:Navegation:Registrar_Notificar.html.twig');
        }
        public function registarUsuariosSistemaAction()   
        {
             return $this->render('QuindimotosProyectoBundle:Navegation:registrarUsuarios.html.twig');
        }
    }