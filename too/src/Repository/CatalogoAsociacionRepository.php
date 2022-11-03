<?php

namespace App\Repository;

use App\Entity\CatalogoAsociacion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CatalogoAsociacion>
 *
 * @method CatalogoAsociacion|null find($id, $lockMode = null, $lockVersion = null)
 * @method CatalogoAsociacion|null findOneBy(array $criteria, array $orderBy = null)
 * @method CatalogoAsociacion[]    findAll()
 * @method CatalogoAsociacion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CatalogoAsociacionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CatalogoAsociacion::class);
    }

    public function save(CatalogoAsociacion $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CatalogoAsociacion $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CatalogoAsociacion[] Returns an array of CatalogoAsociacion objects
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

//    public function findOneBySomeField($value): ?CatalogoAsociacion
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
