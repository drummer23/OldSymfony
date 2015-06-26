<?php

namespace Acme\UiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $dogs = array();

        $dogs[] = ['name' => 'Bello', 'race' => 'Terrier'];
        $dogs[] = ['name' => 'Wuffy', 'race' => 'Terrier'];
        $dogs[] = ['name' => 'Baily', 'race' => 'Terrier'];



        return $this->render('AcmeUiBundle:Default:index.html.twig',array('dogs' => $dogs));
    }
}
