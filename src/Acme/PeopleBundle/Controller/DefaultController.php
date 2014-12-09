<?php

namespace Acme\PeopleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmePeopleBundle:Default:index.html.twig', array('name' => $name));
    }
}
