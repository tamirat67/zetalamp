<?php
namespace Ethio\Covid19Bundle\Filter;

use Symfony\Component\HttpFoundation\Request;

class FilterFunctions
{
    /**
     * Return filtered data.
     *
     */
    public function filter(Request $request,$formFilter, $em, $lexikFormFilter, $selectedEntity)
    {
        // manually bind values from the request
        $formFilter->submit($request->query->get($formFilter->getName()));
        // initialize a query builder
        $filterBuilder = $em
            ->getRepository(''.$selectedEntity)
            ->createQueryBuilder('e');
        // build the query from the given form object
        $lexikFormFilter->addFilterConditions($formFilter, $filterBuilder);
        // now look at the DQL =)
        // var_dump($filterBuilder->getDql());
        $resultQuery = $filterBuilder->getQuery();
        $filteredValues = $resultQuery->getResult();
        return $filteredValues;
    }
}
