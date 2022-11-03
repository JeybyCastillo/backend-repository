<?php

namespace App\Repository;

use App\Entity\DetalleAportacionCuenta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DetalleAportacionCuenta>
 *
 * @method DetalleAportacionCuenta|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetalleAportacionCuenta|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetalleAportacionCuenta[]    findAll()
 * @method DetalleAportacionCuenta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetalleAportacionCuentaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetalleAportacionCuenta::class);
    }

    public function save(DetalleAportacionCuenta $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DetalleAportacionCuenta $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return DetalleAportacionCuenta[] Returns an array of DetalleAportacionCuenta objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DetalleAportacionCuenta
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
