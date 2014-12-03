<?php

namespace Acme\CalcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeCalcBundle:Default:index.html.twig', array('name' => $name));
    }

    public function crossAction($number)
    {
        $strDigits = ( string ) $number;

        for( $intCrossfoot = $i = 0; $i < strlen ( $strDigits ); $i++ )
        {
            $intCrossfoot += $strDigits{$i};
        }

        return new Response('<html><body>Number: ' . $intCrossfoot . '</body></html>');
    }
}
