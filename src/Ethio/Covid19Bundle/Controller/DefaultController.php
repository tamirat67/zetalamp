<?php

namespace Ethio\Covid19Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use OST\UABundle\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

use Ethio\Covid19Bundle\Entity\KaffaltiiGalmeessi;
use Ethio\Covid19Bundle\Entity\WaterKaffaltiiGalmeessi;
use Ethio\Covid19Bundle\Entity\RoadKaffaltiiGalmeessi;
use DGC\ChartBundle\Chart\PieChart;

/**
 * Author Tamirat Tanga
 * tamirattanga@gmil.com, tamirat.tanga@ju.edu.et
 *    +251912939267
 */
class DefaultController extends Controller
{
  public function homemarqueeAction(Security $security)
    {
          $user = $security->getUser();

        return $this->render('default/homemarquee.html.twig');
    }

    public function indexAction()
    {
 
        return $this->render('default/homemarquee.html.twig');
    }

   ###################### Building chart #########################33
    public function welcomeHomeAction() {
	
    }

       
 
 public function dashboardAction(Security $security)
    {
    	    $user = $security->getUser();
          $this->get('security.token_storage')->setToken(null); 
         $this->get('session')->invalidate();
   
        return $this->render('Covid19Bundle:Default:index.html.twig');
    }
  
 public function mapsAction()
    {
        return $this->render('default/maps.html.twig');
    }
 public function helpAction()
    {
        return $this->render('default/help.html.twig');
    }
 public function documentAction()
    {
        return $this->render('default/document.html.twig');
    }
public function contactAction()
    {
        return $this->render('default/contact.html.twig');
    }
 public function logShowAction($selectedBundle, $selectedEntity, $id) {
       // $this->denyAccessUnlessGranted('VIEW_LOG');
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
 public function saveTranslationAction(Request $request, $selectedBundle, $selectedEntity, $id, $locale, $field) {
       // $this->denyAccessUnlessGranted('VIEW_LOG');
# get content from the request $content
        $em = $this->getDoctrine()->getManager();
        $data = $request->request->all();
        $translation_content = $data['content'];

        $dynamic_obj = $selectedBundle . 'Bundle:' . $selectedEntity;
        $obj = $em->getRepository($dynamic_obj)->findOneById($id);
//        echo $dynamic_obj;
//        die();
//                
        $repository = $em->getRepository('Gedmo\\Translatable\\Entity\\Translation');
        $repository
                ->translate($obj, $field, 'en', $translation_content);
        $em->persist($obj);
        $em->flush();
        return new RedirectResponse($request->headers->get('referer'));
    }
    
        public function switchLanguageAction(Request $request, $locale): RedirectResponse{
 
        $request ->attributes->set('_locale', null);
        $this->get('session')->set('_locale', '$locale');
 
        return $this->redirect($request->headers->get('referer'));
    }
    
        public function changeLocaleAction(Request $request, $id){
//        return new RedirectResponse($request->headers->get('referer'));
//        $request->setLocale('or');
//        echo $request->getLocale();

        $referer = $request->headers->get('referer');
 
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
  
    
}
   
       
