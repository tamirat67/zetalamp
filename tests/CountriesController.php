<?php

namespace Ethio\Covid19Bundle\Controller;

use Ethio\Covid19Bundle\Entity\Countries;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Country controller.
 *
 */
class CountriesController extends Controller
{
    /**
     * Lists all country entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $country = $em->getRepository('Covid19Bundle:Countries')->findAll();

        return $this->render('countries/index.html.twig', array(
            'country' => $country,
        ));
    }

    /**
     * Creates a new country entity.
     *
     */
    public function newAction(Request $request)
    {
        $country = new Countries();
        $form = $this->createForm('Ethio\Covid19Bundle\Form\CountriesType', $country);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($country);
            $em->flush();

            return $this->redirectToRoute('countries_show', array('id' => $country->getId()));
        }

        return $this->render('countries/new.html.twig', array(
            'country' => $country,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a country entity.
     *
     */
    public function showAction(Countries $country)
    {
        $deleteForm = $this->createDeleteForm($country);

        return $this->render('countries/show.html.twig', array(
            'country' => $country,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing country entity.
     *
     */
    public function editAction(Request $request, Countries $country)
    {
        $deleteForm = $this->createDeleteForm($country);
        $editForm = $this->createForm('Ethio\Covid19Bundle\Form\CountriesType', $country);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('countries_edit', array('id' => $country->getId()));
        }

        return $this->render('countries/edit.html.twig', array(
            'country' => $country,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a country entity.
     *
     */
    public function deleteAction(Request $request, Countries $country)
    {
        $form = $this->createDeleteForm($country);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($country);
            $em->flush();
        }

        return $this->redirectToRoute('countries_index');
    }

    /**
     * Creates a form to delete a country entity.
     *
     * @param Countries $country The country entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Countries $country)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('countries_delete', array('id' => $country->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
