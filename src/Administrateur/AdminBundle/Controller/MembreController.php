<?php

namespace Administrateur\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Administrateur\AdminBundle\Entity\Membre;
use Administrateur\AdminBundle\Form\MembreType;

/**
 * Membre controller.
 *
 * @Route("/membre")
 */
class MembreController extends Controller
{

    /**
     * Lists all Membre entities.
     *
     * @Route("/", name="membre")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdministrateurAdminBundle:Membre')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Membre entity.
     *
     * @Route("/", name="membre_create")
     * @Method("POST")
     * @Template("AdministrateurAdminBundle:Membre:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Membre();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('membre_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Membre entity.
    *
    * @param Membre $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Membre $entity)
    {
        $form = $this->createForm(new MembreType(), $entity, array(
            'action' => $this->generateUrl('membre_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Membre entity.
     *
     * @Route("/new", name="membre_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Membre();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Membre entity.
     *
     * @Route("/{id}", name="membre_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdministrateurAdminBundle:Membre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Membre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Membre entity.
     *
     * @Route("/{id}/edit", name="membre_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdministrateurAdminBundle:Membre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Membre entity.');
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
    * Creates a form to edit a Membre entity.
    *
    * @param Membre $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Membre $entity)
    {
        $form = $this->createForm(new MembreType(), $entity, array(
            'action' => $this->generateUrl('membre_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Membre entity.
     *
     * @Route("/{id}", name="membre_update")
     * @Method("PUT")
     * @Template("AdministrateurAdminBundle:Membre:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdministrateurAdminBundle:Membre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Membre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('membre_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Membre entity.
     *
     * @Route("/{id}", name="membre_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdministrateurAdminBundle:Membre')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Membre entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('membre'));
    }

    /**
     * Creates a form to delete a Membre entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('membre_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
