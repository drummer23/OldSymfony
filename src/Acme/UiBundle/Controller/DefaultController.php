<?php

namespace Acme\UiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeUiBundle:Default:index.html.twig');
    }
}
