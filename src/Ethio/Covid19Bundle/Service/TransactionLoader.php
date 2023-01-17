<?php

namespace Ethio\Covid19Bundle\Service;

use Doctrine\ORM\EntityManager;

/**
 * Description of PurchaseTransactionLoader
 *
 * @author Tamirat Tanga
 */
class TransactionLoader {

    protected $em;

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function getServiceBalanceSeries($lakk_galmee) {
        $kaffaltii_ammaa = $this->em->createQuery("SELECT a.payment_date, a.kaffaltii_ammaa FROM Covid19Bundle:KaffaltiiGalmeessi a")->getArrayResult();
        return $kaffaltii_ammaa;
    }

}
