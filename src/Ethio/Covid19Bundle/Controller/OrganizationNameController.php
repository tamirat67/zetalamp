<?php

namespace Ethio\Covid19Bundle\Controller;

use Ethio\Covid19Bundle\Entity\OrganizationName;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Organizationname controller.
 *
 */
class OrganizationNameController extends Controller
{
    /**
     * Lists all organizationName entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $organizationNames = $em->getRepository('Covid19Bundle:OrganizationName')->findAll();

        return $this->render('organizationname/index.html.twig', array(
            'organizationNames' => $organizationNames,
        ));
    }

    /**
     * Creates a new organizationName entity.
     *
     */
    public function newAction(Request $request)
    {
        $organizationName = new Organizationname();
        $form = $this->createForm('Ethio\Covid19Bundle\Form\OrganizationNameType', $organizationName);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($organizationName);
            $em->flush();

            return $this->redirectToRoute('organizationname_show', array('id' => $organizationName->getId()));
        }

        return $this->render('organizationname/new.html.twig', array(
            'organizationName' => $organizationName,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a organizationName entity.
     *
     */
    public function showAction(OrganizationName $organizationName)
    {
        $deleteForm = $this->createDeleteForm($organizationName);

        return $this->render('organizationname/show.html.twig', array(
            'organizationName' => $organizationName,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing organizationName entity.
     *
     */
    public function editAction(Request $request, OrganizationName $organizationName)
    {
        $deleteForm = $this->createDeleteForm($organizationName);
        $editForm = $this->createForm('Ethio\Covid19Bundle\Form\OrganizationNameType', $organizationName);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('organizationname_edit', array('id' => $organizationName->getId()));
        }

        return $this->render('organizationname/edit.html.twig', array(
            'organizationName' => $organizationName,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a organizationName entity.
     *
     */
    public function deleteAction(Request $request, OrganizationName $organizationName)
    {
        $form = $this->createDeleteForm($organizationName);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($organizationName);
            $em->flush();
        }

        return $this->redirectToRoute('organizationname_index');
    }

    /**
     * Creates a form to delete a organizationName entity.
     *
     * @param OrganizationName $organizationName The organizationName entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(OrganizationName $organizationName)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('organizationname_delete', array('id' => $organizationName->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
