<?php

namespace Ethio\Covid19Bundle\Controller;

use Ethio\Covid19Bundle\Entity\AboutUs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Picqer\Barcode\BarcodeGeneratorHTML;
use Symfony\Component\HttpFoundation\Response;
use Ethio\Covid19Bundle\Filter\FilterFunctions;


/**
 * aboutUs controller.
 *
 */
class AboutUsController extends Controller {

    /**
     * Lists all aboutUs entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $aboutuses = $em->getRepository('Covid19Bundle:AboutUs')->findAll();

        return $this->render('aboutus/index.html.twig', array(
                    'aboutuses' => $aboutuses,
        ));
    }

    public function AdminindexAction() {
        $em = $this->getDoctrine()->getManager();
 
        $aboutuses = $em->getRepository('Covid19Bundle:AboutUs')->findAll();

        return $this->render('aboutus/Adminindex.html.twig', array(
                    'aboutuses' => $aboutuses,
        ));
    }

    public function anonymousidexAction() {
        $em = $this->getDoctrine()->getManager();

        $aboutuses = $em->getRepository('Covid19Bundle:AboutUs')->findAll();

        return $this->render('aboutus/aboutus.html.twig', array(
                    'aboutUs' => $aboutuses,
        ));
    }

    /**
     * Creates a new aboutUs entity.
     *
     */
    public function newAction(Request $request) {
        $aboutUs = new aboutUs();
        $form = $this->createForm('Covid19Bundle\Form\AboutUsType', $aboutUs);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($aboutUs);
            $em->flush();

            return $this->redirectToRoute('aboutus_show', array('id' => $aboutUs->getId()));
        }

        return $this->render('aboutus/new.html.twig', array(
                    'aboutUs' => $aboutUs,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a aboutUs entity.
     *
     */
    public function showAction(Request $request, AboutUs $aboutUs) {
//        $em = $this->getDoctrine()->getManager();
//        $article = $em->getRepository('Covid19Bundle\Entity\AboutUs')->findOneById(20);
//
        $deleteForm = $this->createDeleteForm($aboutUs);
//        $deleteForm = $this->createDeleteForm($article);
//        $locale = $request->getLocale();
////$article->setLocaleField('or_ET');
//        // echo $locale;
//        $article->setLocaleField($locale);
//        $em->refresh($article);
        return $this->render('aboutus/show.html.twig', array(
                    'aboutUs' => $aboutUs,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing aboutUs entity.
     *
     */
    public function editAction(Request $request, AboutUs $aboutUs) {
        $deleteForm = $this->createDeleteForm($aboutUs);
        $editForm = $this->createForm('Ethio\Covid19Bundle\Form\AboutUsType', $aboutUs);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('aboutus_admin_index');
        }

        return $this->render('aboutus/edit.html.twig', array(
                    'aboutUs' => $aboutUs,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a aboutUs entity.
     *
     */
    public function deleteAction(Request $request, AboutUs $aboutUs) {
        $form = $this->createDeleteForm($aboutUs);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($aboutUs);
            $em->flush();
        }

        return $this->redirectToRoute('aboutus_index');
    }

    /**
     * Creates a form to delete a aboutUs entity.
     *
     * @param AboutUs $aboutUs The aboutUs entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(AboutUs $aboutUs) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('aboutus_delete', array('id' => $aboutUs->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
