<?php

namespace Acme\UiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeUiBundle:Default:index.html.twig', array('name' => $name));
    }
}