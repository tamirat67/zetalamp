<?php

namespace OST\UABundle\Controller;

use OST\UABundle\Entity\Permission;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Ethio\Covid19Bundle\Filter\FilterFunctions;
use OST\UABundle\Filter\Type\PermissionFilterType;
/**
 * Permission controller.
 *
 */
class PermissionController extends Controller
{
    /**
     * Lists all permission entities.
     *
     */
    public function indexAction(Request $request)
    {
        $this->denyAccessUnlessGranted('LIST_PERMISSION');
        $em = $this->getDoctrine()->getManager();
        $formFilter = $this->get('form.factory')->create(PermissionFilterType::class);
        $this->denyAccessUnlessGranted('CREATE_PERMISSION');
        $permission = new Permission();
        $form = $this->createForm('OST\UABundle\Form\PermissionType', $permission);
        $form->handleRequest($request);

        $permissions = $em->getRepository('OSTUABundle:Permission')->findAll();
if ($request->query->has($formFilter->getName())) {
            $filter = new FilterFunctions();
            $lexikFormFilter = $this->get('lexik_form_filter.query_builder_updater');
            $permissions = $filter->filter($request, $formFilter, $em, $lexikFormFilter, 'OSTUABundle:Permission');
        }
        $paginator = $this->get('knp_paginator');
        $paginatedPermissions = $paginator->paginate(
            $permissions, /* query NOT result */ $request->query->getInt('page', 1)/* page number */, 1000/* limit per page */
        );
        return $this->render('permission/index.html.twig', array(
            'permissions' => $paginatedPermissions,
            'formFilter' => $formFilter->createView(),
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new permission entity.
     *
     */
    public function newAction(Request $request)
    {
        $this->denyAccessUnlessGranted('CREATE_PERMISSION');
        $permission = new Permission();
        $form = $this->createForm('OST\UABundle\Form\PermissionType', $permission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($permission);
            $em->flush();
            $flashbag = $this->get('session')->getFlashBag();

            // Set a flash message

            $flashbag->add("success", "Record successfully created");

            return $this->redirectToRoute('permission_index');
        }

        return $this->render('permission/new.html.twig', array(
            'permission' => $permission,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a permission entity.
     *
     */
    public function showAction(Permission $permission)
    {
        $this->denyAccessUnlessGranted('VIEW_PERMISSION',$permission);
        $deleteForm = $this->createDeleteForm($permission);

        return $this->render('permission/show.html.twig', array(
            'permission' => $permission,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing permission entity.
     *
     */
    public function editAction(Request $request, Permission $permission)
    {
        $this->denyAccessUnlessGranted('EDIT_PERMISSION',$permission);
        $deleteForm = $this->createDeleteForm($permission);
        $editForm = $this->createForm('OST\UABundle\Form\PermissionType', $permission);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $flashbag = $this->get('session')->getFlashBag();

            // Set a flash message

            $flashbag->add("success", "Record successfully updated");

            return $this->redirectToRoute('permission_index');
        }

        return $this->render('permission/edit.html.twig', array(
            'permission' => $permission,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a permission entity.
     *
     */
    public function deleteAction(Request $request, Permission $permission)
    {
        $this->denyAccessUnlessGranted('DELETE_PERMISSION',$permission);
        $form = $this->createDeleteForm($permission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($permission);
            $em->flush();
            $flashbag = $this->get('session')->getFlashBag();

            // Set a flash message

            $flashbag->add("success", "Record successfully deleted");

        }

        return $this->redirectToRoute('permission_index');
    }

    /**
     * Creates a form to delete a permission entity.
     *
     * @param Permission $permission The permission entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Permission $permission)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('permission_delete', array('id' => $permission->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
