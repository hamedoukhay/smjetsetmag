<?php

namespace Administrateur\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Administrateur\AdminBundle\Entity\Projection;
use Administrateur\AdminBundle\Form\ProjectionType;

/**
 * Projection controller.
 *
 * @Route("/projection")
 */
class ProjectionController extends Controller
{

    /**
     * Lists all Projection entities.
     *
     * @Route("/", name="projection")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdministrateurAdminBundle:Projection')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Projection entity.
     *
     * @Route("/", name="projection_create")
     * @Method("POST")
     * @Template("AdministrateurAdminBundle:Projection:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Projection();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('projection_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Projection entity.
    *
    * @param Projection $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Projection $entity)
    {
        $form = $this->createForm(new ProjectionType(), $entity, array(
            'action' => $this->generateUrl('projection_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Projection entity.
     *
     * @Route("/new", name="projection_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Projection();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Projection entity.
     *
     * @Route("/{id}", name="projection_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdministrateurAdminBundle:Projection')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projection entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Projection entity.
     *
     * @Route("/{id}/edit", name="projection_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdministrateurAdminBundle:Projection')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projection entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Projection entity.
    *
    * @param Projection $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Projection $entity)
    {
        $form = $this->createForm(new ProjectionType(), $entity, array(
            'action' => $this->generateUrl('projection_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Projection entity.
     *
     * @Route("/{id}", name="projection_update")
     * @Method("PUT")
     * @Template("AdministrateurAdminBundle:Projection:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdministrateurAdminBundle:Projection')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projection entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('projection_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Projection entity.
     *
     * @Route("/{id}", name="projection_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdministrateurAdminBundle:Projection')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Projection entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('projection'));
    }

    /**
     * Creates a form to delete a Projection entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('projection_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
