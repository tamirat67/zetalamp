<?php

namespace Ethio\Covid19Bundle\Controller;

use Ethio\Covid19Bundle\Entity\ContactUs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Contactu controller.
 *
 */
class ContactUsController extends Controller
{
    /**
     * Lists all contactU entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $contactuses = $em->getRepository('Covid19Bundle:ContactUs')->findAll();

        return $this->render('contactus/index.html.twig', array(
            'contactuses' => $contactuses,
        ));
    }

    /**
     * Creates a new contactU entity.
     *
     */
    public function newAction(Request $request)
    {
        $contactU = new Contactu();
        $form = $this->createForm('Ethio\Covid19Bundle\Form\ContactUsType', $contactU);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contactU);
            $em->flush();

            return $this->redirectToRoute('contactus_show', array('id' => $contactU->getId()));
        }

        return $this->render('contactus/new.html.twig', array(
            'contactU' => $contactU,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a contactU entity.
     *
     */
    public function showAction(ContactUs $contactU)
    {
        $deleteForm = $this->createDeleteForm($contactU);

        return $this->render('contactus/show.html.twig', array(
            'contactU' => $contactU,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing contactU entity.
     *
     */
    public function editAction(Request $request, ContactUs $contactU)
    {
        $deleteForm = $this->createDeleteForm($contactU);
        $editForm = $this->createForm('Ethio\Covid19Bundle\Form\ContactUsType', $contactU);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contactus_edit', array('id' => $contactU->getId()));
        }

        return $this->render('contactus/edit.html.twig', array(
            'contactU' => $contactU,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a contactU entity.
     *
     */
    public function deleteAction(Request $request, ContactUs $contactU)
    {
        $form = $this->createDeleteForm($contactU);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contactU);
            $em->flush();
        }

        return $this->redirectToRoute('contactus_index');
    }

    /**
     * Creates a form to delete a contactU entity.
     *
     * @param ContactUs $contactU The contactU entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ContactUs $contactU)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contactus_delete', array('id' => $contactU->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
