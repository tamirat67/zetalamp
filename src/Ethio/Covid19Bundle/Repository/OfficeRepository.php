<?php

namespace Ethio\Covid19Bundle\Repository;
/**
 * Author Tamirat Tanga
 * tamirattanga@gmil.com, tamirat.tanga@ju.edu.et
 *    +251912939267
 */
class OfficeRepository extends \Doctrine\ORM\EntityRepository
{

public function findUserByOffice($user, $itemName)
    {
        $qb = $this->createQueryBuilder('user');
        $qb->select('user')
            ->innerJoin(
                'MyBundle:Item',
                'office',
                Query\Expr\Join::WITH,
                $qb->expr()->eq('user.office', 'office.item_id')
            )
            ->where($qb->expr()->like('user.name', ':locationName'))
            ->andWhere($qb->expr()->like('office.name', ':itemName'))
            ->setParameter('locationName', $locationName)
            ->setParameter('itemName', $itemName);
        $query = $qb->getQuery();

        return $query->getResult();
    }
}
