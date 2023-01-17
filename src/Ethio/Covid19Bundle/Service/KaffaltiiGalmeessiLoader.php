<?php

namespace Ethio\Covid19Bundle\Service;

use Doctrine\ORM\EntityManager;

/**
 * Description of PurchaseTransactionLoader
 *
 * @author Tamirat Tanga
 */
class KaffaltiiGalmeessiLoader {

    protected $em;

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function isTransactionAvailable($m_birr_transaction_id) {
        $status = false;
        $entity = $this->em->getRepository('Covid19Bundle:KaffaltiiGalmeessi')->findOneBy(array('m_birr_transaction_id' => $m_birr_transaction_id));
        if ($entity) {
            $status = true;
        }
        return $status;
    }

    public function getSalesTransactions($service_provider_account_number) {
        $filterBuilder = $this->em->getRepository('juepasBundle:Transaction')
                ->createQueryBuilder('e');
        $resultQuery = $filterBuilder->getQuery();
        return $entities = $resultQuery->getResult();
    }

    public function getPurchaseTransactions($service_provider_account_number) {
        $filterBuilder = $this->em->getRepository('juepasBundle:Transaction')
                ->createQueryBuilder('e');
        $resultQuery = $filterBuilder->getQuery();
        return $entities = $resultQuery->getResult();
    }

    public function getCountSalesTransactions($service_provider_account_number) {
        $filterBuilder = $this->em->getRepository('juepasBundle:Transaction')
                ->createQueryBuilder('e');
        $resultQuery = $filterBuilder->getQuery();
        return $entities = $resultQuery->getResult();
    }

    public function getCountPurchaseTransactions($service_provider_account_number) {
        $filterBuilder = $this->em->getRepository('juepasBundle:Transaction')
                ->createQueryBuilder('e');
        $resultQuery = $filterBuilder->getQuery();
        return $entities = $resultQuery->getResult();
    }

    public function getServiceBalanceSeries($service_provider_account_number) {
        $new_balance_in_cents = $this->em->createQuery("SELECT a.created_at, a.new_balance_in_cents FROM juepasBundle:Transaction a")->getArrayResult();
        return $new_balance_in_cents;
    }

}
