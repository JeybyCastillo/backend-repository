<?php

namespace App\Repository;

use App\Entity\TipoParentezcoBeneficiario;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TipoParentezcoBeneficiario>
 *
 * @method TipoParentezcoBeneficiario|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoParentezcoBeneficiario|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoParentezcoBeneficiario[]    findAll()
 * @method TipoParentezcoBeneficiario[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoParentezcoBeneficiarioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TipoParentezcoBeneficiario::class);
    }

    public function save(TipoParentezcoBeneficiario $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TipoParentezcoBeneficiario $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TipoParentezcoBeneficiario[] Returns an array of TipoParentezcoBeneficiario objects
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

//    public function findOneBySomeField($value): ?TipoParentezcoBeneficiario
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
