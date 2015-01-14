<?php

namespace Acme\DoctrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeDoctrineBundle:Default:index.html.twig', array('name' => $name));
    }
}
