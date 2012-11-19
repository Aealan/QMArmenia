<?php

namespace Quindimotos\ProyectoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Quindimotos\ProyectoBundle\Entity\Moto;
use Quindimotos\ProyectoBundle\Form\MotoType;

/**
 * Moto controller.
 *
 * @Route("/moto")
 */
class MotoController extends Controller
{
    /**
     * Lists all Moto entities.
     *
     * @Route("/", name="moto")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('QuindimotosProyectoBundle:Moto')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Moto entity.
     *
     * @Route("/{id}/show", name="moto_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuindimotosProyectoBundle:Moto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Moto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Moto entity.
     *
     * @Route("/new", name="moto_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Moto();
        $form   = $this->createForm(new MotoType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Moto entity.
     *
     * @Route("/create", name="moto_create")
     * @Method("POST")
     * @Template("QuindimotosProyectoBundle:Moto:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Moto();
        $form = $this->createForm(new MotoType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('moto_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Moto entity.
     *
     * @Route("/{id}/edit", name="moto_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuindimotosProyectoBundle:Moto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Moto entity.');
        }

        $editForm = $this->createForm(new MotoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Moto entity.
     *
     * @Route("/{id}/update", name="moto_update")
     * @Method("POST")
     * @Template("QuindimotosProyectoBundle:Moto:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuindimotosProyectoBundle:Moto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Moto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new MotoType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('moto_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Moto entity.
     *
     * @Route("/{id}/delete", name="moto_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('QuindimotosProyectoBundle:Moto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Moto entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('moto'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
