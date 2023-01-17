<?php

namespace OST\UABundle\Controller;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
  public function indexAction() {
//        $this->denyAccessUnlessGranted('LIST_GROUP');
        $em = $this->getDoctrine()->getManager();
        $stat = $em->getRepository('Covid19Bundle:VisitorLog')->getStat();
        return $this->render('Covid19Bundle:Default:index.html.twig', array(
                    'stat' => $stat,
        ));
    }
    public function showvisitorlogAction($username) {
//        $this->denyAccessUnlessGranted('LIST_GROUP');
        $em = $this->getDoctrine()->getManager();
        $visitor_logs = array_reverse($em->getRepository('Covid19Bundle:VisitorLog')->findBy(array(
            'visitor_username'=>$username
        )));
        return $this->render('Covid19Bundle:Default:visitorlog.html.twig', array(
            'visitor_logs' => $visitor_logs,
        ));
    }
    public function changeLocaleAction(Request $request, $id){
//        return new RedirectResponse($request->headers->get('referer'));
//        $request->setLocale('or');
//        echo $request->getLocale();

        $referer = $request->headers->get('referer');
//        echo $referer;
//        $lastPath = substr($referer, strpos($referer,$request->getSchemeAndHttpHost()));
//        $lastPath = str_replace($request->getBaseUrl(),'',$lastPath);
//        $parameters = $this->get('router')->getMatcher()->match($lastPath);
////        $parameters = $matcher->;
//        $route = $parameters['_route'];
//        $url = $this->get('router')->generate($route,array('_locale' => $id));
//        if ($referer == $this->generateUrl('locale_language', array('id' => $id))) {
//            return $this->redirectToRoute('user_index',array('_locale' => $id));
//        } else {
//            $url = $referer;
//        }
//
//        $url = str_replace($referer,'en',$id);
//        echo $url;
//        exit(1);
//        if(substr_compare($referer,'/en/',0)) {
//
//        }
//        $url = '/'.preg_quote('en','/').'/';
//        $url = preg_replace($url,$id,$referer,1);
//        $url = '/'.preg_quote('or','/').'/';
//        $url = preg_replace($url,$id,$referer,1);
//        $url = '/'.preg_quote('am','/').'/';
//        $url = preg_replace($url,$id,$referer,1);
        return $this->redirect($referer,array('_locale'=>$request->getLocale()));
//        return $this->redirectToRoute('user_index',array('_locale' => $id));
    }

    public function changeLocale1Action(Request $request) {

        $request->setLocale('or');
        $referer = $request->headers->get('referer');
//        exit(1);
        if ($referer == NULL) {
            $url = $this->router->generate('fallback_url');
        } else {
            $url = $referer;
        }
        return $this->redirect($referer);
    }
    public function checkLogsAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('Gedmo\Loggable\Entity\LogEntry')->findAll(); // we use default log entry class
        $paginator = $this->get('knp_paginator');
        $paginatedLogs = $paginator->paginate(
            $repo, /* query NOT result */ $request->query->getInt('page', 1)/* page number */, 10/* limit per page */
        );
        return $this->render('default/logentriess.html.twig', array(
            'logs' => $paginatedLogs,
        ));
    }

    public function logShowAction($selectedBundle, $selectedEntity, $id) {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('Gedmo\Loggable\Entity\LogEntry');
        $entity = $em->find($selectedBundle . 'Bundle:' . $selectedEntity, $id);
        $logs = $repo->getLogEntries($entity);

        return $this->render('default/logShow.html.twig', array(
            'selectedEntity' => $selectedEntity,
            'entity' => $entity,
            'logs' => $logs,
        ));
    }
}
