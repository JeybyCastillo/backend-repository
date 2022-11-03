<?php

namespace App\Repository;

use App\Entity\PersonaActividadEconomica;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PersonaActividadEconomica>
 *
 * @method PersonaActividadEconomica|null find($id, $lockMode = null, $lockVersion = null)
 * @method PersonaActividadEconomica|null findOneBy(array $criteria, array $orderBy = null)
 * @method PersonaActividadEconomica[]    findAll()
 * @method PersonaActividadEconomica[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonaActividadEconomicaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PersonaActividadEconomica::class);
    }

    public function save(PersonaActividadEconomica $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PersonaActividadEconomica $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PersonaActividadEconomica[] Returns an array of PersonaActividadEconomica objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PersonaActividadEconomica
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
