<?php

namespace App\Repository;

use App\Entity\Factories;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Factories|null find($id, $lockMode = null, $lockVersion = null)
 * @method Factories|null findOneBy(array $criteria, array $orderBy = null)
 * @method Factories[]    findAll()
 * @method Factories[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FactoriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Factories::class);
    }

    // /**
    //  * @return Factories[] Returns an array of Factories objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Factories
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
