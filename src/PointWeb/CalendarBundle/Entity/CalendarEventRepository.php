<?php

namespace PointWeb\CalendarBundle\Entity;

use Doctrine\ORM\EntityRepository;
use PointWeb\UserBundle\Entity\User;

/**
 * CalendarEventRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CalendarEventRepository extends EntityRepository
{
    public function getEventsWeek(User $user, \DateTime $first_day_of_week, \DateTime $last_day_of_week)
    {
        $qb = $this->createQueryBuilder("ec");
        $qb->join('ec.creator', 'u');
        $qb->andWhere($qb->expr()->eq("u.id", $user->getId()));
        $qb->andWhere("
            (ec.startDate <= '" . $first_day_of_week->format("Y-m-d H:i:s") . "' AND ec.endDate >= '" . $last_day_of_week->format("Y-m-d H:i:s") . "')
            OR
            (ec.startDate >= '" . $first_day_of_week->format("Y-m-d H:i:s") . "' AND ec.endDate <= '" . $last_day_of_week->format("Y-m-d H:i:s") . "')
            OR
            (ec.startDate <= '" . $first_day_of_week->format("Y-m-d H:i:s") . "' AND ec.endDate <= '" . $last_day_of_week->format("Y-m-d H:i:s") . "' AND ec.endDate >= '" . $first_day_of_week->format("Y-m-d H:i:s") . "')
            OR
            (ec.startDate >= '" . $first_day_of_week->format("Y-m-d H:i:s") . "' AND ec.endDate >= '" . $last_day_of_week->format("Y-m-d H:i:s") . "' AND ec.startDate <= '" . $last_day_of_week->format("Y-m-d H:i:s") . "')
            ");
        $q = $qb->getQuery();
        //echo "Entre ".$first_day_of_week->format("Y-m-d H:i:s")." et ".$last_day_of_week->format("Y-m-d H:i:s").$q->getSQL()."<br/>";
        return $q->getResult();
    }
}