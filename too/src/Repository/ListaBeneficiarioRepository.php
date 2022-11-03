<?php

namespace App\Repository;

use App\Entity\ListaBeneficiario;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ListaBeneficiario>
 *
 * @method ListaBeneficiario|null find($id, $lockMode = null, $lockVersion = null)
 * @method ListaBeneficiario|null findOneBy(array $criteria, array $orderBy = null)
 * @method ListaBeneficiario[]    findAll()
 * @method ListaBeneficiario[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListaBeneficiarioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ListaBeneficiario::class);
    }

    public function save(ListaBeneficiario $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ListaBeneficiario $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ListaBeneficiario[] Returns an array of ListaBeneficiario objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ListaBeneficiario
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
