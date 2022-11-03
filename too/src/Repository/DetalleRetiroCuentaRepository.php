<?php

namespace App\Repository;

use App\Entity\DetalleRetiroCuenta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DetalleRetiroCuenta>
 *
 * @method DetalleRetiroCuenta|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetalleRetiroCuenta|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetalleRetiroCuenta[]    findAll()
 * @method DetalleRetiroCuenta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetalleRetiroCuentaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetalleRetiroCuenta::class);
    }

    public function save(DetalleRetiroCuenta $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DetalleRetiroCuenta $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return DetalleRetiroCuenta[] Returns an array of DetalleRetiroCuenta objects
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

//    public function findOneBySomeField($value): ?DetalleRetiroCuenta
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
