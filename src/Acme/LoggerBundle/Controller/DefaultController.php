<?php

namespace Acme\LoggerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeLoggerBundle:Default:index.html.twig', array('name' => $name));
    }
}
