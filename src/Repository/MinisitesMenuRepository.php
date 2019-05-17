<?php

namespace App\Repository;

use App\Entity\MinisitesMenu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MinisitesMenu|null find($id, $lockMode = null, $lockVersion = null)
 * @method MinisitesMenu|null findOneBy(array $criteria, array $orderBy = null)
 * @method MinisitesMenu[]    findAll()
 * @method MinisitesMenu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MinisitesMenuRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MinisitesMenu::class);
    }

    // /**
    //  * @return MinisitesMenu[] Returns an array of MinisitesMenu objects
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
    public function findOneBySomeField($value): ?MinisitesMenu
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
