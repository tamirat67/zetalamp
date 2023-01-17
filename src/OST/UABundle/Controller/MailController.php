<?php

namespace OST\UABundle\Controller;

use OST\UABundle\Entity\Mail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Mail controller.
 *
 */
class MailController extends Controller
{
    /**
     * Lists all Mail entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $inboxMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'receiver' => $user,
            'is_draft' => false
        ),array('id' => 'DESC'));
        $unreadMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'receiver' => $user,
            'is_read' => false,
            'is_draft' => false
        ),array('id' => 'DESC'));
        $sentMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'sender' => $user,
            'is_draft' => false
        ),array('id' => 'DESC'));
        $draftMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'sender' => $user,
            'is_draft' => true
        ),array('id' => 'DESC'));
        return $this->render('mail/mailBox.html.twig', array(
            'inboxMails' => $inboxMails,
            'unreadMails' => $unreadMails,
            'sentMails' => $sentMails,
            'draftMails' => $draftMails,
        ));
    }

    /**
     * Creates a new Mail entity.
     *
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $Mail = new Mail();
        $users = $em->getRepository('OSTUABundle:User')->findAll();
        $form = $this->createForm('OST\UABundle\Form\MailType', $Mail);
        $form->handleRequest($request);
        $user = $this->getUser();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $data = $form->getData();
            $receiver = $data->getMailTo();
            $Mail->setMailTo($receiver->getUsername());
            if($receiver->getEmail()){
                $Mail->setMailTo($receiver->getEmail());
            }
            $Mail->setIsRead(false);
            $Mail->setSender($user);
            $Mail->setMailFrom($user->getEmail());
            $mailDate = new \DateTime();
            $Mail->setMailDateGregorian($mailDate);
//            $receiver = $em->getRepository('JUUABundle:User')->findOneBy(array(
//                'email' => $Mail->getMailTo()
//            ));
            if(!empty($receiver)){
                $Mail->setReceiver($receiver);
            }

            if($form->get('send')->isClicked()){
                $Mail->setIsSent(true);
                $Mail->setIsDraft(false);
            }elseif($form->get('draft')->isClicked()){
                $Mail->setIsSent(false);
                $Mail->setIsDraft(true);
            }
            $em->persist($Mail);
            $em->flush();
            return $this->redirectToRoute('mail_index');
        }

        $inboxMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'receiver' => $user,
            'is_draft' => false
        ),array('id' => 'DESC'));
        $unreadMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'receiver' => $user,
            'is_read' => false,
            'is_draft' => false
        ),array('id' => 'DESC'));
        $sentMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'sender' => $user,
            'is_draft' => false
        ),array('id' => 'DESC'));
        $draftMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'sender' => $user,
            'is_draft' => true
        ),array('id' => 'DESC'));
        return $this->render('mail/composeMail.html.twig', array(
            'form' => $form->createView(),
            'inboxMails' => $inboxMails,
            'unreadMails' => $unreadMails,
            'sentMails' => $sentMails,
            'draftMails' => $draftMails,
        ));
    }

    /**
     * Finds and displays a Mail entity.
     *
     */
    public function showAction(Request $request, Mail $Mail)
    {
        $this->denyAccessUnlessGranted('VIEW_MAIL', $Mail);
        $em = $this->getDoctrine()->getManager();
        $replayMail = new Mail();
        $replayMail->setMailSubject($Mail->getMailSubject());
        $replayMail->setMailFrom($Mail->getMailFrom());
        $replayMail->setMailBody($Mail->getMailBody());
        $user = $this->getUser();


        $inboxMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'receiver' => $user,
            'is_draft' => false
        ),array('id' => 'DESC'));
        $unreadMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'receiver' => $user,
            'is_read' => false,
            'is_draft' => false
        ),array('id' => 'DESC'));
        $sentMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'sender' => $user,
            'is_draft' => false
        ),array('id' => 'DESC'));
        $draftMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'sender' => $user,
            'is_draft' => true
        ),array('id' => 'DESC'));
        return $this->render('mail/viewMail.html.twig', array(
            'Mail' => $Mail,
            'inboxMails' => $inboxMails,
            'unreadMails' => $unreadMails,
            'sentMails' => $sentMails,
            'draftMails' => $draftMails,
        ));
    }

    /**
     * Displays a form to edit an existing Mail entity.
     *
     */
    public function editAction(Request $request, Mail $Mail)
    {
        $deleteForm = $this->createDeleteForm($Mail);
        $editForm = $this->createForm('OST\UABundle\Form\MailType', $Mail);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('mail_edit', array('id' => $Mail->getId()));
        }

        return $this->render('mail/edit.html.twig', array(
            'Mail' => $Mail,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Mail entity.
     *
     */
    public function deleteAction(Request $request, Mail $Mail)
    {
        $form = $this->createDeleteForm($Mail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($Mail);
            $em->flush();
        }

        return $this->redirectToRoute('mail_index');
    }

    /**
     * Creates a form to delete a Mail entity.
     *
     * @param Mail $Mail The Mail entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Mail $Mail)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mail_delete', array('id' => $Mail->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function sentMailAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $inboxMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'receiver' => $user,
            'is_draft' => false
        ),array('id' => 'DESC'));
        $unreadMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'receiver' => $user,
            'is_read' => false,
            'is_draft' => false
        ),array('id' => 'DESC'));
        $sentMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'sender' => $user,
            'is_draft' => false
        ),array('id' => 'DESC'));
        $draftMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'sender' => $user,
            'is_draft' => true
        ),array('id' => 'DESC'));
        return $this->render('mail/sentMail.html.twig', array(
            'inboxMails' => $inboxMails,
            'unreadMails' => $unreadMails,
            'sentMails' => $sentMails,
            'draftMails' => $draftMails,
        ));
    }

    public function draftMailAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $inboxMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'receiver' => $user,
            'is_draft' => false
        ),array('id' => 'DESC'));
        $unreadMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'receiver' => $user,
            'is_read' => false,
            'is_draft' => false
        ),array('id' => 'DESC'));
        $sentMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'sender' => $user,
            'is_draft' => false
        ),array('id' => 'DESC'));
        $draftMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'sender' => $user,
            'is_draft' => true
        ),array('id' => 'DESC'));
        return $this->render('mail/draftMail.html.twig', array(
            'inboxMails' => $inboxMails,
            'unreadMails' => $unreadMails,
            'sentMails' => $sentMails,
            'draftMails' => $draftMails,
        ));
    }

    public function replayMailAction(Request $request, Mail $Mail)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->request->has('send') or $request->request->has('replay') or $request->request->has('draft')) {
            if ($request->request->has('send')) {
                $Mail->setIsDraft(false);
                $em->persist($Mail);
                $em->flush();
                return $this->redirectToRoute('mail_index');
            }
            $user = $this->getUser();
            $Mail = new Mail();
            $Mail->setIsRead(false);
            $Mail->setSender($user);
            $replayBody = $request->request->get('replayBody');
            $Mail->setMailBody($replayBody);
            $Mail->setMailSubject($Mail->getMailSubject());
            $Mail->setMailFrom($user->getEmail());
            $Mail->setMailTo($Mail->getSender()->getEmail());
            $mailDate = new \DateTime();
            $Mail->setMailDateGregorian($mailDate);
            $Mail->setReceiver($Mail->getSender());
            $Mail->setRepliedTo($Mail);
            if ($request->request->has('replay')) {
                $Mail->setIsSent(true);
                $Mail->setIsDraft(false);
            }
            elseif ($request->request->has('draft')) {
                $Mail->setIsSent(false);
                $Mail->setIsDraft(true);
            }
            $em->persist($Mail);
            $em->flush();
        }
        return $this->redirectToRoute('mail_index');
    }

    public function userInboxAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $unreadMails = $em->getRepository('OSTUABundle:Mail')->findBy(array(
            'receiver' => $user,
            'is_read' => false,
            'is_draft' => false
        ),array('id' => 'DESC'));
        $this->get('session')->set('sessionUnreadMails', $unreadMails);
        return new Response(
            1
        );
//        return $unreadMails;
    }
}