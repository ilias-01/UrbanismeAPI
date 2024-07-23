<?php

namespace App\Repository;

use App\Entity\AvisDepot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AvisDepot>
 */
class AvisDepotRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AvisDepot::class);
    }

    //    /**
    //     * @return AvisDepot[] Returns an array of AvisDepot objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

       public function findOneByFilter($request)
       {
            $page = $request->query->get('page', 1);
            $limit = $request->query->get('limit', 10);
            $search = $request->query->get('search', '');
            // $dateFrom = $request->query->get('date_from', '');

            $queryBuilder = $this->createQueryBuilder('u');

            if ($search) {
                $queryBuilder->andWhere('u.reference LIKE :search')
                            ->setParameter('search', '%'.$search.'%');
            }

            // if ($dateFrom) {
            //     $queryBuilder->andWhere('u.date_depot >= :dateFrom')
            //                 ->setParameter('dateFrom', $dateFrom);
            // }
            // Clone the query builder for the count query
            $countQueryBuilder = clone $queryBuilder;
            $queryBuilder->setFirstResult(($page - 1) * $limit)
                        ->setMaxResults($limit);

            $urbanismeRequests = $queryBuilder->getQuery()->getResult();

           return $urbanismeRequests;
       }

}
