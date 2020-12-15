<?php

namespace App\Repository;

use App\Entity\BlogReady;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BlogReady|null find($id, $lockMode = null, $lockVersion = null)
 * @method BlogReady|null findOneBy(array $criteria, array $orderBy = null)
 * @method BlogReady[]    findAll()
 * @method BlogReady[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlogReadyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BlogReady::class);
    }

    // /**
    //  * @return BlogReady[] Returns an array of BlogReady objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BlogReady
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
