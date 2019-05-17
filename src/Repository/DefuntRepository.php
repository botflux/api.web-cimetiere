<?php

namespace App\Repository;

use App\Entity\Defunt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Defunt|null find($id, $lockMode = null, $lockVersion = null)
 * @method Defunt|null findOneBy(array $criteria, array $orderBy = null)
 * @method Defunt[]    findAll()
 * @method Defunt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DefuntRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Defunt::class);
    }

    // /**
    //  * @return Defunt[] Returns an array of Defunt objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Defunt
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
