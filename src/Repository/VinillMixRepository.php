<?php

namespace App\Repository;

use App\Entity\VinillMix;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VinillMix>
 *
 * @method VinillMix|null find($id, $lockMode = null, $lockVersion = null)
 * @method VinillMix|null findOneBy(array $criteria, array $orderBy = null)
 * @method VinillMix[]    findAll()
 * @method VinillMix[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VinillMixRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VinillMix::class);
    }

    //    /**
    //     * @return VinillMix[] Returns an array of VinillMix objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('v')
    //            ->andWhere('v.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('v.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?VinillMix
    //    {
    //        return $this->createQueryBuilder('v')
    //            ->andWhere('v.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
