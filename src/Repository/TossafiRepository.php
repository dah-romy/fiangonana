<?php

namespace App\Repository;

use App\Entity\Tossafi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tossafi|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tossafi|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tossafi[]    findAll()
 * @method Tossafi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TossafiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tossafi::class);
    }

    // /**
    //  * @return Tossafi[] Returns an array of Tossafi objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tossafi
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
