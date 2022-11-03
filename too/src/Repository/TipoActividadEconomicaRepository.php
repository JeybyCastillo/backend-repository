<?php

namespace App\Repository;

use App\Entity\TipoActividadEconomica;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TipoActividadEconomica>
 *
 * @method TipoActividadEconomica|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoActividadEconomica|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoActividadEconomica[]    findAll()
 * @method TipoActividadEconomica[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoActividadEconomicaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TipoActividadEconomica::class);
    }

    public function save(TipoActividadEconomica $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TipoActividadEconomica $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TipoActividadEconomica[] Returns an array of TipoActividadEconomica objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TipoActividadEconomica
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
