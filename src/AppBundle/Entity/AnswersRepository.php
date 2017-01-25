<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * AnswersRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AnswersRepository extends EntityRepository
{
    public function findByUser($user) {
        $qb = $this->createQueryBuilder('a')
                ->select('a')
                ->join('a.vote', 'v')
//                ->join('a.answer', 'aa')
//                ->join('aa.question', 'q')
//                ->where('v.d = :del')
                ->andWhere('v.user = :user')
                ->setParameter('user', $user);
//                ->setParameter('del', 0);
        return $qb->getQuery()
                        ->getResult();
    }
}