<?php

namespace App\Repository;

use App\Entity\GiftsFiles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GiftsFiles|null find($id, $lockMode = null, $lockVersion = null)
 * @method GiftsFiles|null findOneBy(array $criteria, array $orderBy = null)
 * @method GiftsFiles[]    findAll()
 * @method GiftsFiles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GiftsFilesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GiftsFiles::class);
    }

    // /**
    //  * @return GiftsFiles[] Returns an array of GiftsFiles objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GiftsFiles
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
