<?php

namespace App\Repository;

use App\Entity\DailyForecasts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DailyForecasts|null find($id, $lockMode = null, $lockVersion = null)
 * @method DailyForecasts|null findOneBy(array $criteria, array $orderBy = null)
 * @method DailyForecasts[]    findAll()
 * @method DailyForecasts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DailyForecastsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DailyForecasts::class);
    }

    // /**
    //  * @return DailyForecasts[] Returns an array of DailyForecasts objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DailyForecasts
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
