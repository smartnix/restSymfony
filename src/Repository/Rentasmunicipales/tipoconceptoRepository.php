<?php

namespace App\Repository\Rentasmunicipales;

use App\Entity\Rentasmunicipales\tipoconcepto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method tipoconcepto|null find($id, $lockMode = null, $lockVersion = null)
 * @method tipoconcepto|null findOneBy(array $criteria, array $orderBy = null)
 * @method tipoconcepto[]    findAll()
 * @method tipoconcepto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class tipoconceptoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, tipoconcepto::class);
    }

    // /**
    //  * @return tipoconcepto[] Returns an array of tipoconcepto objects
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
    public function findOneBySomeField($value): ?tipoconcepto
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
