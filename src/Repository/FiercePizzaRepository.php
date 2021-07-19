<?php

namespace App\Repository;

use App\Entity\FiercePizza;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FiercePizza|null find($id, $lockMode = null, $lockVersion = null)
 * @method FiercePizza|null findOneBy(array $criteria, array $orderBy = null)
 * @method FiercePizza[]    findAll()
 * @method FiercePizza[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FiercePizzaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FiercePizza::class);
    }

    // /**
    //  * @return FiercePizza[] Returns an array of FiercePizza objects
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
    public function findOneBySomeField($value): ?FiercePizza
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
