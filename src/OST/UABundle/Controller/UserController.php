<?php

/**
 * User controller.
 * PHP Version 7.2
 *
 * @category Controller
 * @package  UABundle
 * @author   OST Programmers <username@ost.com>
 * @license  http://www.licence.com OST
 * @link     ost.com
 */

namespace OST\UABundle\Controller;

use OST\UABundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Ethio\Covid19Bundle\Filter\FilterFunctions;
use OST\UABundle\Entity\Group;
use OST\UABundle\Filter\Type\UserFilterType;
use OST\UABundle\Report\AuthenticationListener;
/**
 * User controller.
 *
 * @category Controller
 * @package  UABundle
 * @author   OST Programmers <username@ost.com>
 * @license  http://www.licence.com OST
 * @link     ost.com
 */
class UserController extends Controller {

    /**
     * Lists all user entities.
     *
     */
    public function indexAction(Request $request) {

        //     $users = $em
        //     ->getRepository('OSTUABundle:User')
        //     ->findBy(array('user' => $user), array()
        // );
       // $this->denyAccessUnlessGranted('LIST_USER');
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        // $users = $em->getRepository('OSTUABundle:User')->findBy('user' => $office->getOffice());
        $formFilter = $this->get('form.factory')->create(UserFilterType::class);
        $user = new User();
        $users = $em->getRepository('OSTUABundle:User')->findAll();
        $form = $this->createForm('OST\UABundle\Form\UserType', $user);
        $form->handleRequest($request);
        // if ($request->query->has($formFilter->getName())) {
        //     // manually bind values from the request
        //     $form->submit($request->query->get($formFilter->getName()));
        //     // initialize a query builder
        //     $filterBuilder = $em
        //         ->getRepository('OSTUABundle:User')
        //         ->createQueryBuilder('e');
        //     // build the query from the given form object
        //     $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($formFilter, $filterBuilder);
        //     $resultQuery = $filterBuilder->getQuery();
        //     $users = $resultQuery->getResult();
        //     // now look at the DQL =)
        //     var_dump($filterBuilder->getDql());
        //     return $this->render('user/index.html.twig', array(
        //         'formFilter' => $formFilter->createView(),
        //         'form' => $form->createView(),
        //         'users' => $users,
        //     ));
        // }

        if ($request->query->has($formFilter->getName())) {
            $filter = new FilterFunctions();
            $lexikFormFilter = $this->get('lexik_form_filter.query_builder_updater');
            $users = $filter->filter($request, $formFilter, $em, $lexikFormFilter, 'OSTUABundle:User');
        }
        $paginator = $this->get('knp_paginator');
        $paginatedUsers = $paginator->paginate($users, /* query NOT result */ $request->query->getInt('page', 1)/* page number */, 15/* limit per page */
        );

        // $users = $em->getRepository('OSTUABundle:User')->findAll();
        // $paginator = $this->get('knp_paginator');
        // $paginatedUsers = $paginator->paginate(
        //     $users, /* query NOT result */ $request->query->getInt('page', 1)/* page number */, 10/* limit per page */
        // );
        return $this->render('user/index.html.twig', array(
                    'users' => $paginatedUsers,
                    'formFilter' => $formFilter->createView(),
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new user entity.
     *
     */
    public function newAction(Request $request) {
      //  $this->denyAccessUnlessGranted('CREATE_USER');
        $user = new User();
        $form = $this->createForm('OST\UABundle\Form\UserType', $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $flashbag = $this->get('session')->getFlashBag();

            // Set a flash message

            $flashbag->add("success", "Record successfully created");

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/new.html.twig', array(
                    'user' => $user,
                    'form' => $form->createView(),
        ));
    }
   public function userContactInfoAction($username) {
//        $this->denyAccessUnlessGranted('LIST_GROUP');
        $em = $this->getDoctrine()->getManager();
        $user_profile = $em->getRepository('OSTUABundle:User')->findOneBy(array(
            'username' => $username
        ));
        return $this->render('user/user_profile.html.twig', array(
                    'user_profile' => $user_profile,
        ));
    }

    /**
     * Finds and displays a user entity.
     *
     */
    public function showAction(User $user) {
       // $this->denyAccessUnlessGranted('VIEW_USER', $user);
        $deleteForm = $this->createDeleteForm($user);

        return $this->render('user/show.html.twig', array(
                    'user' => $user,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    public function showuserAction(User $user) {
       // $this->denyAccessUnlessGranted('VIEW_USER', $user);
        $deleteForm = $this->createDeleteForm($user);

        return $this->render('user/showusr.html.twig', array(
                    'user' => $user,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing user entity.
     *
     */
    public function editAction(Request $request, User $user) {
       // $this->denyAccessUnlessGranted('EDIT_USER', $user);
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('OST\UABundle\Form\UserType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $flashbag = $this->get('session')->getFlashBag();

            // Set a flash message

            $flashbag->add("success", "Record successfully updated");

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/edit.html.twig', array(
                    'user' => $user,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    public function switchAction(Request $request, User $user) {
        $em = $this->getDoctrine()->getManager();
        if ($user->isEnabled()){
                  $user->setEnabled(0);  
        } else {
                 $user->setEnabled(1);   
        }
        $em->flush();
        $flashbag = $this->get('session')->getFlashBag();
        // Set a flash message
        $flashbag->add("success", "Operation Successful");
        return $this->redirectToRoute('user_index');
    }

    /**
     * Deletes a user entity.
     *
     */
    public function deleteAction(Request $request, User $user) {
        $this->denyAccessUnlessGranted('DELETE_USER', $user);
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
            $flashbag = $this->get('session')->getFlashBag();

            // Set a flash message

            $flashbag->add("success", "Record successfully deleted");
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * Creates a form to delete a user entity.
     *
     * @param User $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }


}
