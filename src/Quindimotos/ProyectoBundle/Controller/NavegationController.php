<?php

namespace Quindimotos\ProyectoBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Quindimotos\ProyectoBundle\Entity\Cliente;
use Quindimotos\ProyectoBundle\Entity\Empleado;

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
            
          $entity = new Cliente();
          $em = $this->getDoctrine()->getManager();
          $form   = $this->createForm(new ClienteType(), $entity); 
          $departamento_id = $this->getRequest()->get('id');
          $ciudades = $this->getDoctrine()->getRepository('QuindimotosProyectoBundle:Ciudad')->findByDepartamento($departamento_id);
          $entities = $em->getRepository('QuindimotosProyectoBundle:Cliente')->findAll();
        
            return $this->render('QuindimotosProyectoBundle:Navegation:registrar_Solicitud.html.twig',array( 
                
                'entity' => $entity,
                'entities'=>$entities,
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
             $entity = new Empleado();
             $em = $this->getDoctrine()->getManager();
             $entities = $em->getRepository('QuindimotosProyectoBundle:Empleado')->findAll();
             return $this->render('QuindimotosProyectoBundle:Navegation:registrarUsuarios.html.twig',
                     array( 'entity' => $entity,'entities'=>$entities));
        }
    }