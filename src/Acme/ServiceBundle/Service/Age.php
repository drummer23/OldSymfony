<?php
/**
 * Created by PhpStorm.
 * User: rspielmann
 * Date: 15.12.2014
 * Time: 10:10
 */

namespace Acme\ServiceBundle\Service;


class Age
{


    public function getAge($birthday)
    {
        $now = new \DateTime();

        $interval = $now->diff($birthday);

        return $interval;
    }

} 