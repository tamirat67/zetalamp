<?php
namespace Ethio\Covid19Bundle\Controller;

use OST\UABundle\Entity\User;
use Ethio\Covid19Bundle\Entity\Office;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Ethio\Covid19Bundle\Filter\OfficeFilterType;
use Ethio\Covid19Bundle\Filter\FilterFunctions;
/**
 * Author Tamirat Tanga
 * tamirattanga@gmil.com, tamirat.tanga@ju.edu.et
 *    +251912939267
 */
class OfficeController extends Controller {

    /**
     * Lists all office entities.
     *
     */
    public function indexAction(Request $request, $parent) {
      //  $this->denyAccessUnlessGranted('LIST_OFFICE');
       // $text = $this->officeStructure();
        $em = $this->getDoctrine()->getManager();
        $office = new Office();
        $form = $this->createForm('Ethio\Covid19Bundle\Form\OfficeType', $office);


       if ($parent == 0) {
            $offices = $em->getRepository('Covid19Bundle:Office')->findBy(array('parentOffice' => array(NULL)));
        } else {
            $offices = $em->getRepository('Covid19Bundle:Office')->findBy(array('parentOffice' => array($parent)));
        }
        $formFilter = $this->get('form.factory')->create(OfficeFilterType::class);
        if ($request->query->has($formFilter->getName())) {
            $filter = new FilterFunctions();
            $lexikFormFilter = $this->get('lexik_form_filter.query_builder_updater');
            $assets = $filter->filter($request, $formFilter, $em, $lexikFormFilter, 'Covid19Bundle:Office');
        }
    $paginator = $this->get('knp_paginator');
        $paginatedOffices = $paginator->paginate(
                $offices, /* query NOT result */ $request->query->getInt('page', 1)/* page number */, 10/* limit per page */
        );
 
        if ($parent == 0) {
            return $this->render('office/index.html.twig', array(
                        'offices' => $paginatedOffices,
                        'formFilter' => $formFilter->createView(),
                        'form' => $form->createView(),
            ));
        } else {
            return $this->render('office/sub-offices.html.twig', array(
                        'offices' => $paginatedOffices,
                        'formFilter' => $formFilter->createView(),
                        'form' => $form->createView(),
            ));
        }
    }

    /**
     * Creates a new office entity.
     *
     */
    public function newAction(Request $request) {
       // $this->denyAccessUnlessGranted('CREATE_OFFICE');
        $office = new Office();
        $form = $this->createForm('Ethio\Covid19Bundle\Form\OfficeType', $office);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
################################################################################            
################################################################################
#
//$office->setLocaleField('or');
################################################################################            
            $em->persist($office);
            $em->flush();

            $flashbag = $this->get('session')->getFlashBag();
            // Set a flash message
            $flashbag->add("success", "Record successfully created");
            return $this->redirectToRoute('office_index', array('parent' => 0));
        }

        return $this->render('office/new.html.twig', array(
                    'office' => $office,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a office entity.
     *
     */
    public function showAction(Request $request, Office $office) {
       // $this->denyAccessUnlessGranted('VIEW_OFFICE', $office);
        $deleteForm = $this->createDeleteForm($office);
//        $locale = $request->getLocale();
//        echo $locale;
//        die();
        $em = $this->getDoctrine()->getManager();
        $office->setLocaleField('en');
        $em->refresh($office);        

        return $this->render('office/show.html.twig', array(
                    'office' => $office,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    public function showlistsAction(Office $office) {
         $this->denyAccessUnlessGranted('VIEW_OFFICE',$office);
        $deleteForm = $this->createDeleteForm($office);

        return $this->render('office/show.html.twig', array(
                    'office' => $office,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing office entity.
     *
     */
    public function editAction(Request $request, Office $office) {
    //    $this->denyAccessUnlessGranted('EDIT_OFFICE', $office);
        $deleteForm = $this->createDeleteForm($office);
        $em = $this->getDoctrine()->getManager();
        $editForm = $this->createForm('Ethio\Covid19Bundle\Form\OfficeType', $office);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
// Prevent saving an office record that has its parent referencing back to it
//   get submitted parent office`
//        compare the current sumbited object id and the parent id
//        if mached do not proceed the operation                                    
            $submitedChildOffice = $editForm->getData();
            if ($submitedChildOffice->getParentOffice()) {
                $submittedParentOffice = $em->getRepository('Covid19Bundle:Office')->findOneById($submitedChildOffice->getParentOffice());

                if ($submittedParentOffice->getParentOffice()) {
                    if ($submittedParentOffice->getParentOffice()->getId() == $submitedChildOffice->getId()) {
                        $flashbag = $this->get('session')->getFlashBag();
                        // Set a flash message
                        $flashbag->add("error", "There was a problem in the heirarchy arrangement.");

                        return $this->redirectToRoute('office_index', array('parent' => 0));
                    }
                }
            }

            $this->getDoctrine()->getManager()->flush();

            $flashbag = $this->get('session')->getFlashBag();
            // Set a flash message
            $flashbag->add("success", "Record successfully updated");

            return $this->redirectToRoute('office_index', array('parent' => 0));
        }

        return $this->render('office/edit.html.twig', array(
                    'office' => $office,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a office entity.
     *
     */
    public function deleteAction(Request $request, Office $office) {
       // $this->denyAccessUnlessGranted('DELETE_OFFICE', $office);
        $form = $this->createDeleteForm($office);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($office);
            $em->flush();
        }
        $flashbag = $this->get('session')->getFlashBag();

        // Set a flash message

        $flashbag->add("success", "Record successfully deleted");


        return $this->redirectToRoute('office_index', array('parent' => 0));
    }

    /**
     * Creates a form to delete a office entity.
     *
     * @param Office $office The office entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Office $office) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('office_delete', array('id' => $office->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

    private function createTreeView($text, $array, $currentParent, $currLevel = 0, $prevLevel = -1) {

        foreach ($array as $categoryId => $category) {

            if ($currentParent == $category['parent_id']) {
                if ($currLevel > $prevLevel) {
                    echo " <ol class='tree'> ";
                    $text = $text . " <ol class='tree'> ";
                }

                if ($currLevel == $prevLevel) {
                    echo " </li> ";
                    $text = $text . " <ol class='tree'> ";
                }

                echo '<li> <label for="subfolder2">' . $category['name'] . '</label> <input type="checkbox" name="subfolder2"/>';
                $text = $text . '<li> <label for="subfolder2">' . $category['name'] . '</label> <input type="checkbox" name="subfolder2"/>';
                if ($currLevel > $prevLevel) {
                    $prevLevel = $currLevel;
                }

                $currLevel++;

                $this->createTreeView($text, $array, $categoryId, $currLevel, $prevLevel);

                $currLevel--;
            }
        }

        if ($currLevel == $prevLevel) {
            echo " </li>  </ol> ";
            $text = $text . " </li>  </ol> ";
        }
        return $text;
    }

    private function officeStructure() {
        $text = "";
        $em = $this->getDoctrine()->getManager();
        $parentOffices = $em->getRepository('Covid19Bundle:Office')->findAll();
        $arrayCategories = array();
        foreach ($parentOffices as $parentOffice) {
            $parent_id = 0;
            if ($parentOffice->getParentOffice())
                $parent_id = $parentOffice->getParentOffice()->getId();
            $arrayCategories[$parentOffice->getId()] = array(
                "parent_id" => $parent_id,
                "name" => $parentOffice->getName()
            );
        }
        if (!empty($parentOffices)) {
            $text = $this->createTreeView($text, $arrayCategories, 0);
        }
        exit(1);
        return $text;
    }

}
