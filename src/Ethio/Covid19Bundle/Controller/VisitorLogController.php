<?php

namespace Ethio\Covid19Bundle\Controller;

use Ethio\Covid19Bundle\Entity\VisitorLog;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ReflectionObject;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Ethio\Covid19Bundle\Entity\KaffaltiiGalmeessi;
use OST\UABundle\Report\AuthenticationListener;
/**
 * Visitorlog controller.
 *
 */
class VisitorLogController extends Controller
{
    /**
     * Lists all visitorLog entities.
     *
     */
  public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
  $stat = $em->getRepository('Covid19Bundle:VisitorLog')->getStat();
        return $this->render('visitorlog/index.html.twig', array(
                    'stat' => $stat,
        ));
    }
  public function showvisitorlogAction($username) {
//        $this->denyAccessUnlessGranted('LIST_GROUP');
        $em = $this->getDoctrine()->getManager();
        $visitor_logs = array_reverse($em->getRepository('Covid19Bundle:VisitorLog')->findBy(array(
            'visitor_username'=>$username
        )));
        return $this->render('visitorlog/visitorlog.html.twig', array(
            'visitor_logs' => $visitor_logs,
        ));
    }
 
 
 
     public function userStatAction() {
        $user_stat = $this->get('Ethio\Covid19Bundle.SystemUserStatistics');
        $stat_series = $user_stat->getVisitorLogDataSeries();
        $date_data = array();
        $username_date = array();

        foreach ($stat_series as $series_value) {
            $username_date[] = $series_value['kaffaltii_ammaa'];
#################################################################################
            $dt = $series_value['payment_date'];
            $o = new ReflectionObject($dt);
            $p = $o->getProperty('date');
            $date = $p->getValue($dt);

            $date_data[] = $date;
        }
//        print_r($series_values_in_birr);
//        print_r($series_values_in_birr_date,0);
        // Chart
        print_r($username_date);
        
         $data = [
        ['Microsoft Internet Explorer', 56.33],
        ['Chrome', 24.03],
        ['Firefox', 10.38],
        ['Safari', 4.77],
        ['Opera', 0.91],
        ['Proprietary or Undetectable', 0.2]
    ];

    $ob = new Highchart();
    $ob->chart->renderTo('piechart');
    $ob->chart->type('pie');
    $ob->title->text('My Pie Chart');
    $ob->series(array(array("data"=>$data)));

        return $this->render('visitorlog/statistics.html.twig', array(
                    'chart' => $ob
        ));
        }


    /**
     * Finds and displays a visitorLog entity.
     *
     */
  //  public function showAction(VisitorLog $visitorLog)
   // {

      //  return $this->render('visitorlog/show.html.twig', array(
        //    'visitorLog' => $visitorLog,
        //));
    //}
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('Covid19Bundle:VisitorLog')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find VisitorLog entity.');
        }

        return $this->render('visitorlog/show.html.twig', array(
                    'entity' => $entity,
        ));
    }

}
