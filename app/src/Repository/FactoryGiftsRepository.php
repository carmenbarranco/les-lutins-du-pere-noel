<?php

namespace App\Repository;

use App\Entity\FactoryGifts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FactoryGifts|null find($id, $lockMode = null, $lockVersion = null)
 * @method FactoryGifts|null findOneBy(array $criteria, array $orderBy = null)
 * @method FactoryGifts[]    findAll()
 * @method FactoryGifts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FactoryGiftsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FactoryGifts::class);
    }

    // /**
    //  * @return FactoryGifts[] Returns an array of FactoryGifts objects
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
    public function findOneBySomeField($value): ?FactoryGifts
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
