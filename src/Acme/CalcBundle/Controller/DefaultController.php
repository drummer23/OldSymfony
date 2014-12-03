<?php

namespace Acme\CalcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeCalcBundle:Default:index.html.twig', array('name' => $name));
    }
}
