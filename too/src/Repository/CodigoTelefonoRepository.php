<?php

namespace App\Repository;

use App\Entity\CodigoTelefono;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CodigoTelefono>
 *
 * @method CodigoTelefono|null find($id, $lockMode = null, $lockVersion = null)
 * @method CodigoTelefono|null findOneBy(array $criteria, array $orderBy = null)
 * @method CodigoTelefono[]    findAll()
 * @method CodigoTelefono[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CodigoTelefonoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CodigoTelefono::class);
    }

    public function save(CodigoTelefono $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CodigoTelefono $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CodigoTelefono[] Returns an array of CodigoTelefono objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CodigoTelefono
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
