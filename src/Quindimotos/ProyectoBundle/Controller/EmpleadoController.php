<?php

namespace Quindimotos\ProyectoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Quindimotos\ProyectoBundle\Entity\Empleado;
use Quindimotos\ProyectoBundle\Form\EmpleadoType;

/**
 * Empleado controller.
 *
 * @Route("/empleado")
 */
class EmpleadoController extends Controller
{
    /**
     * Lists all Empleado entities.
     *
     * @Route("/", name="empleado")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('QuindimotosProyectoBundle:Empleado')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Empleado entity.
     *
     * @Route("/{id}/show", name="empleado_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuindimotosProyectoBundle:Empleado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Empleado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Empleado entity.
     *
     * @Route("/new", name="empleado_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Empleado();
        $form   = $this->createForm(new EmpleadoType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Empleado entity.
     *
     * @Route("/create", name="empleado_create")
     * @Method("POST")
     * @Template("QuindimotosProyectoBundle:Empleado:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Empleado();
        $form = $this->createForm(new EmpleadoType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('empleado_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Empleado entity.
     *
     * @Route("/{id}/edit", name="empleado_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuindimotosProyectoBundle:Empleado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Empleado entity.');
        }

        $editForm = $this->createForm(new EmpleadoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Empleado entity.
     *
     * @Route("/{id}/update", name="empleado_update")
     * @Method("POST")
     * @Template("QuindimotosProyectoBundle:Empleado:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuindimotosProyectoBundle:Empleado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Empleado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EmpleadoType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('empleado_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Empleado entity.
     *
     * @Route("/{id}/delete", name="empleado_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('QuindimotosProyectoBundle:Empleado')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Empleado entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('empleado'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
