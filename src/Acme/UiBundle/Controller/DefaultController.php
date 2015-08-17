<?php

namespace Acme\UiBundle\Controller;

use Acme\UiBundle\Entity\Dog;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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

    public function viewAction()
    {

        $dogs = array();

        $dogs[] = ['name' => 'Bello', 'race' => 'Terrier'];
        $dogs[] = ['name' => 'Wuffy', 'race' => 'Terrier'];
        $dogs[] = ['name' => 'Baily', 'race' => 'Terrier'];



        return $this->render('AcmeUiBundle:Default:index.angular.html.twig',array('dogs' => $dogs));
    }

    public function listAction()
    {

        $dogs = array();

        $dogs[] = ['name' => 'Bello', 'race' => 'Terrier'];
        $dogs[] = ['name' => 'Wuffy', 'race' => 'Terrier'];
        $dogs[] = ['name' => 'Baily', 'race' => 'Terrier'];


        return new JsonResponse(array('dogs' => $dogs));
    }

    public function newAction(Request $request)
    {
        $dog = new Dog();

        $form = $this->createFormBuilder($dog)
            ->add('name','text')
            ->add('race', 'text')
            ->add('birthday', 'date')
            ->add('save', 'submit', array('label' => 'Create Dog'))
            ->getForm();

        return $this->render('AcmeUiBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
