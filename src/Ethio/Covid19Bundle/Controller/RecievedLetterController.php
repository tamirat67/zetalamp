<?php

namespace Ethio\Covid19Bundle\Controller;

use Ethio\Covid19Bundle\Entity\RecievedLetter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Ethio\Covid19Bundle\Filter\EmployeeFilterType;
use Ethio\Covid19Bundle\Filter\FilterFunctions;
use Ethio\Covid19Bundle\Form\RecievedLetterType;


/**
 * Recievedletter controller.
 *
 */
class RecievedLetterController extends Controller
{
    /**
     * Lists all recievedLetter entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $recievedLetters = $em->getRepository('Covid19Bundle:RecievedLetter')->findAll();

        return $this->render('recievedletter/index.html.twig', array(
            'recievedLetters' => $recievedLetters,
        ));
    }

    /**
     * Creates a new recievedLetter entity.
     *
     */
    public function newAction(Request $request)
    {
        $recievedLetter = new Recievedletter();
        $form = $this->createForm('Ethio\Covid19Bundle\Form\RecievedLetterType', $recievedLetter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        
        $brochureFile = $form->get('upload_letter')->getData();
            if ($brochureFile) {
                $originalFilename = $brochureFile->getClientOriginalName();
                $safeFilename = "recievedLetter"; //transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $uploadLetter = $safeFilename . '-' . uniqid() . '.' . $brochureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $brochureFile->move(
                            __DIR__ . '/../../../../web/uploads/hojjatoota/', $uploadLetter
                    );
                } catch (FileException $e) {
                }
 
                $recievedLetter->setUploadLetter($uploadLetter);
            }
            
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($recievedLetter);
            $em->flush();
            
            $flashbag = $this->get('session')->getFlashBag();
            $flashbag->add("success", "Letter Successfully Uploaded!");

            return $this->redirectToRoute('recievedletter_show', array('id' => $recievedLetter->getId()));
        }

        return $this->render('recievedletter/new.html.twig', array(
            'recievedLetter' => $recievedLetter,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a recievedLetter entity.
     *
     */
    public function showAction(RecievedLetter $recievedLetter)
    {
        $deleteForm = $this->createDeleteForm($recievedLetter);

        return $this->render('recievedletter/show.html.twig', array(
            'recievedLetter' => $recievedLetter,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing recievedLetter entity.
     *
     */
    public function editAction(Request $request, RecievedLetter $recievedLetter)
    {
        $deleteForm = $this->createDeleteForm($recievedLetter);
        $editForm = $this->createForm('Ethio\Covid19Bundle\Form\RecievedLetterType', $recievedLetter);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('recievedletter_edit', array('id' => $recievedLetter->getId()));
        }

        return $this->render('recievedletter/edit.html.twig', array(
            'recievedLetter' => $recievedLetter,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a recievedLetter entity.
     *
     */
    public function deleteAction(Request $request, RecievedLetter $recievedLetter)
    {
        $form = $this->createDeleteForm($recievedLetter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($recievedLetter);
            $em->flush();
        }

        return $this->redirectToRoute('recievedletter_index');
    }

    /**
     * Creates a form to delete a recievedLetter entity.
     *
     * @param RecievedLetter $recievedLetter The recievedLetter entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(RecievedLetter $recievedLetter)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('recievedletter_delete', array('id' => $recievedLetter->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
