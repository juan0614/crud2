<?php

namespace App\Repository;

use App\Entity\Compa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Compa|null find($id, $lockMode = null, $lockVersion = null)
 * @method Compa|null findOneBy(array $criteria, array $orderBy = null)
 * @method Compa[]    findAll()
 * @method Compa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Compa::class);
    }

    // /**
    //  * @return Compa[] Returns an array of Compa objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Compa
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
