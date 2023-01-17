<?php
/**
 * Group controller.
 * PHP Version 7.2
 *
 * @category Controller
 * @package  UABundle
 * @author   OST Programmers <username@ost.com>
 * @license  http://www.licence.com OST
 * @link     ost.com
 */

namespace OST\UABundle\Controller;

use OST\UABundle\Entity\Group;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Ethio\Covid19Bundle\Filter\FilterFunctions;
use OST\UABundle\Filter\Type\GroupFilterType;

/**
 * Group controller.
 *
 * @category Controller
 * @package  UABundle
 * @author   OST Programmers <username@ost.com>
 * @license  http://www.licence.com OST
 * @link     ost.com
 */
class GroupController extends Controller
{
    /**
     * Lists all group entities.
     *
     * @return /Symfony/Component/HttpFoundation/RedirectResponse
     */
    public function indexAction(Request $request)
    {
      //  $this->denyAccessUnlessGranted('LIST_GROUP');
        $em = $this->getDoctrine()->getManager();
        //$this->denyAccessUnlessGranted('CREATE_GROUP');
         $formFilter = $this->get('form.factory')->create(GroupFilterType::class);
        $group = new Group();
        $form = $this->createForm('OST\UABundle\Form\GroupType', $group);
        $form->handleRequest($request);
        $groups = $em->getRepository('OSTUABundle:Group')->findAll();
if ($request->query->has($formFilter->getName())) {
            $filter = new FilterFunctions();
            $lexikFormFilter = $this->get('lexik_form_filter.query_builder_updater');
            $groups = $filter->filter($request, $formFilter, $em, $lexikFormFilter, 'OSTUABundle:Group');
        }
        $paginator = $this->get('knp_paginator');
        $paginatedGroups = $paginator->paginate(
            $groups, /* query NOT result */ $request->query->getInt('page', 1)/* page number */, 10/* limit per page */
        );
        return $this->render(
            'group/index.html.twig',
            array(
            'groups' => $paginatedGroups,
            'form' => $form->createView(),
                        'formFilter' => $formFilter->createView(),

            )
        );
    }

    /**
     * Creates a new group entity.
     *
     * @param Request $request The request
     *
     * @return /Symfony/Component/HttpFoundation/RedirectResponse
     */
    public function newAction(Request $request)
    {
        $this->denyAccessUnlessGranted('CREATE_GROUP');
        $group = new Group();
        $form = $this->createForm('OST\UABundle\Form\GroupType', $group);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($group);
            $em->flush();
            $flashbag = $this->get('session')->getFlashBag();

            // Set a flash message

            $flashbag->add("success", "Record successfully created");

            return $this->redirectToRoute('group_index');
        }

        return $this->render(
            'group/new.html.twig', array(
            'group' => $group,
            'form' => $form->createView(),
            )
        );
    }

    /**
     * Finds and displays a group entity.
     *
     * @param Group $group The group entity
     *
     * @return /Symfony/Component/HttpFoundation/RedirectResponse
     */
    public function showAction(Group $group)
    {
        $this->denyAccessUnlessGranted('VIEW_GROUP', $group);
        $deleteForm = $this->_createDeleteForm($group);

        return $this->render(
            'group/show.html.twig', array(
            'group' => $group,
            'delete_form' => $deleteForm->createView(),
            )
        );
    }

    /**
     * Displays a form to edit an existing group entity.
     *
     * @param Request $request The request
     * @param Group   $group   The group entity
     *
     * @return /Symfony/Component/HttpFoundation/RedirectResponse
     */
    public function editAction(Request $request, Group $group)
    {
        $this->denyAccessUnlessGranted('EDIT_GROUP', $group);
        $deleteForm = $this->_createDeleteForm($group);
        $editForm = $this->createForm('OST\UABundle\Form\GroupType', $group);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $flashbag = $this->get('session')->getFlashBag();

            // Set a flash message

            $flashbag->add("success", "Record successfully updated");

            return $this->redirectToRoute(
                'group_index');
        }

        return $this->render(
            'group/edit.html.twig', array(
            'group' => $group,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            )
        );
    }

    /**
     * Deletes a group entity.
     *
     * @param Request $request The request
     * @param Group   $group   The group entity
     *
     * @return /Symfony/Component/HttpFoundation/RedirectResponse
     */
    public function deleteAction(Request $request, Group $group)
    {
        $this->denyAccessUnlessGranted('DELETE_GROUP', $group);
        $form = $this->_createDeleteForm($group);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($group);
            $em->flush();
            $flashbag = $this->get('session')->getFlashBag();

            // Set a flash message

            $flashbag->add("success", "Record successfully deleted");

        }

        return $this->redirectToRoute('group_index');
    }

    /**
     * Creates a form to delete a group entity.
     *
     * @param Group $group The group entity
     *
     * @return \Symfony\Component\Form\FormInterface The form
     */
    private function _createDeleteForm(Group $group)
    {
        return $this->createFormBuilder()
            ->setAction(
                $this->generateUrl('group_delete', array('id' => $group->getId()))
            )
            ->setMethod('DELETE')
            ->getForm();
    }
}
