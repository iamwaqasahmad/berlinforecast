<?php

namespace App\Repository;

use App\Entity\Headlines;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Headlines|null find($id, $lockMode = null, $lockVersion = null)
 * @method Headlines|null findOneBy(array $criteria, array $orderBy = null)
 * @method Headlines[]    findAll()
 * @method Headlines[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HeadlinesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Headlines::class);
    }

    // /**
    //  * @return Headlines[] Returns an array of Headlines objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Headlines
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
