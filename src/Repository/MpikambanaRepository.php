<?php

namespace App\Repository;

use App\Entity\Mpikambana;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Mpikambana|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mpikambana|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mpikambana[]    findAll()
 * @method Mpikambana[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MpikambanaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mpikambana::class);
    }

    // /**
    //  * @return Mpikambana[] Returns an array of Mpikambana objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Mpikambana
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
