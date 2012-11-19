<?php

namespace Quindimotos\ProyectoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Quindimotos\ProyectoBundle\Entity\Inventariomoto;
use Quindimotos\ProyectoBundle\Form\InventariomotoType;

/**
 * Inventariomoto controller.
 *
 * @Route("/inventariomoto")
 */
class InventariomotoController extends Controller
{
    /**
     * Lists all Inventariomoto entities.
     *
     * @Route("/", name="inventariomoto")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $entities = $em->getRepository('QuindimotosProyectoBundle:Inventariomoto')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Inventariomoto entity.
     *
     * @Route("/{id}/show", name="inventariomoto_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuindimotosProyectoBundle:Inventariomoto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Inventariomoto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Inventariomoto entity.
     *
     * @Route("/new", name="inventariomoto_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Inventariomoto();
        $form   = $this->createForm(new InventariomotoType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Inventariomoto entity.
     *
     * @Route("/create", name="inventariomoto_create")
     * @Method("POST")
     * @Template("QuindimotosProyectoBundle:Inventariomoto:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Inventariomoto();
        $form = $this->createForm(new InventariomotoType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('inventariomoto_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Inventariomoto entity.
     *
     * @Route("/{id}/edit", name="inventariomoto_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuindimotosProyectoBundle:Inventariomoto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Inventariomoto entity.');
        }

        $editForm = $this->createForm(new InventariomotoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Inventariomoto entity.
     *
     * @Route("/{id}/update", name="inventariomoto_update")
     * @Method("POST")
     * @Template("QuindimotosProyectoBundle:Inventariomoto:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuindimotosProyectoBundle:Inventariomoto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Inventariomoto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new InventariomotoType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('inventariomoto_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Inventariomoto entity.
     *
     * @Route("/{id}/delete", name="inventariomoto_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('QuindimotosProyectoBundle:Inventariomoto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Inventariomoto entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('inventariomoto'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
