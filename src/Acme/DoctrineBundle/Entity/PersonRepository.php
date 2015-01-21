<?php

namespace Acme\DoctrineBundle\Entity;

use Doctrine\ORM\EntityRepository;


class PersonRepository extends EntityRepository
{

  public function findAllOrderedByID()
  {
    return $this->getEntityManager()
        ->createQuery(
            'SELECT p FROM AcmeDoctrineBundle:Person p ORDER BY p.id DESC'
        )
        ->getResult();
  }

}