<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function findLike(string $search)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.model LIKE :search')
            ->setParameter('search', '%'.$search.'%')
            ->orderBy('a.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findLikeFilter($category, $brand, $energyClass, $ges, $need)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.category LIKE :category')
            ->andWhere('a.brand LIKE :brand')
            ->andWhere('a.energyClass LIKE :energyClass')
            ->andWhere('a.ges LIKE :ges')
            ->andWhere('a.need LIKE :need')
            ->setParameter('category', '%'.$category.'%')
            ->setParameter('brand', '%'.$brand.'%')
            ->setParameter('energyClass', '%'.$energyClass.'%')
            ->setParameter('ges', '%'.$ges.'%')
            ->setParameter('need', '%'.$need.'%')
            ->orderBy('a.id', 'DESC')
            ->getQuery()
            ->getResult();
    }


    // /**
    //  * @return Product[] Returns an array of Product objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Product
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
