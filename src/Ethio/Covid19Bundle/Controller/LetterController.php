<?php

namespace Ethio\Covid19Bundle\Controller;

use Ethio\Covid19Bundle\Entity\Letter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Ethio\Covid19Bundle\Form\LetterType;

use Symfony\Component\Validator\Constraints\Date;

use Knp\Bundle\SnappyBundle\Snappy\Response\JpegResponse;
use CodeItNow\BarcodeBundle\Utils\BarcodeGenerator;
use CodeItNow\BarcodeBundle\Utils\QrCode;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Letter controller.
 *
 */
class LetterController extends Controller
{
    /**
     * Lists all letter entities.
     *
     */
    public function printAction(Letter $letter, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $letter = $em->getRepository('Covid19Bundle:Letter')->findOneById($id);
        $barcodeText = $letter->getRefNumber();
        $barcode = new BarcodeGenerator();
        $barcode->setText($barcodeText);
        $barcode->setType(BarcodeGenerator::Code128);
        $barcode->setScale(2);
        $barcode->setThickness(18);
        $barcode->setFontSize(10);
        $code = $barcode->generate();
        
        $html = $this->renderView('letter/print.html.twig', array(
            'letter' => $letter,
            'date' => $letter->getDate(),
           // 'organizationnames' => $organizationnames->getOrganizationnames(),
            
            'code' => $code
        ));
        
        
        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html, array(
                'orientation' => 'portrait', 
                'enable-javascript' => true, 
                'javascript-delay' => 1000, 
                'no-stop-slow-scripts' => true, 
                'no-background' => false, 
                'lowquality' => false,
                'encoding' => 'utf-8',
                'images' => true,
                'cookie' => array(),
                'dpi' => 300,
                'image-dpi' => 300,
                'enable-external-links' => true,
                'enable-internal-links' => true
            )),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; id="id.pdf"'
            )
        );

    }
  
 
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $letters = $em->getRepository('Covid19Bundle:Letter')->findAll();

        return $this->render('letter/index.html.twig', array(
            'letters' => $letters,
        ));
    }

    /**
     * Creates a new letter entity.
     *
     */
    public function newAction(Request $request)
    {
        $letter = new Letter();
        $form = $this->createForm('Ethio\Covid19Bundle\Form\LetterType', $letter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        
         
           
            $em = $this->getDoctrine()->getManager();
            $em->persist($letter);
            $em->flush();
            // Set a flash message
           $flashbag = $this->get('session')->getFlashBag();
            $flashbag->add("success", "Letter Successfully Created!");

            return $this->redirectToRoute('letter_show', array('id' => $letter->getId()));
        }

        return $this->render('letter/new.html.twig', array(
            'letter' => $letter,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a letter entity.
     *
     */
    public function showAction(Letter $letter)
    {
        $deleteForm = $this->createDeleteForm($letter);

        return $this->render('letter/show.html.twig', array(
            'letter' => $letter,
            'delete_form' => $deleteForm->createView(),
        ));
    }
  
    /**
     * Displays a form to edit an existing letter entity.
     *
     */
    public function editAction(Request $request, Letter $letter)
    {
        $deleteForm = $this->createDeleteForm($letter);
        $editForm = $this->createForm('Ethio\Covid19Bundle\Form\LetterType', $letter);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('letter_edit', array('id' => $letter->getId()));
        }

        return $this->render('letter/edit.html.twig', array(
            'letter' => $letter,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a letter entity.
     *
     */
    public function deleteAction(Request $request, Letter $letter)
    {
        $form = $this->createDeleteForm($letter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($letter);
            $em->flush();
        }

        return $this->redirectToRoute('letter_index');
    }

    /**
     * Creates a form to delete a letter entity.
     *
     * @param Letter $letter The letter entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Letter $letter)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('letter_delete', array('id' => $letter->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
