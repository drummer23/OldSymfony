<?php

namespace Acme\SessionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeSessionBundle:Default:index.html.twig', array('name' => $name));
    }
}
