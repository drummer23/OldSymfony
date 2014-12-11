<?php

namespace Acme\SessionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction()
    {
        $now = new \DateTime();

        $session = new Session();

        //$session->start();


        $lastvisit = $session->has('lastvisit') ? $session->get('lastvisit')->format('Y-m-d H:i:s') : 'this is your first visit';


        $session->set('lastvisit', $now );

        return new Response('<html><body>Your last visit was: ' . $lastvisit . '</body></html>');
    }
}
