<?php

namespace App\Repository;

use App\Entity\Publipostage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Publipostage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Publipostage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Publipostage[]    findAll()
 * @method Publipostage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PublipostageRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Publipostage::class);
    }

    // /**
    //  * @return Publipostage[] Returns an array of Publipostage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Publipostage
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
