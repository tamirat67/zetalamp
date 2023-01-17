<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ethio\Covid19Bundle\Service;

use Symfony\Component\DependencyInjection\Container;
use Doctrine\ORM\EntityManager;
use Ethio\Covid19Bundle\Entity\VisitorLog;
/**
 * Description of SystemUserStatistics
 *
 * @author tame
 */
class SystemUserStatistics {

    //put your code here
    protected $em;
    protected $container;

    public function __construct(EntityManager $em, Container $container) {
        $this->em = $em;
        $this->container = $container;
    }

    public function getVisitorLogDataSeries() {
        $visitor_log_data = $this->em->createQuery("SELECT a.payment_date, a.kaffaltii_ammaa FROM Covid19Bundle:KaffaltiiGalmeessi a")->getArrayResult();
        return $visitor_log_data;
    }

}
