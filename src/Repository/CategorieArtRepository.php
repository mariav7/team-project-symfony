<?php

namespace App\Repository;

use App\Entity\CategorieArt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CategorieArt|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategorieArt|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategorieArt[]    findAll()
 * @method CategorieArt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorieArtRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategorieArt::class);
    }

    // /**
    //  * @return CategorieArt[] Returns an array of CategorieArt objects
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
    public function findOneBySomeField($value): ?CategorieArt
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
