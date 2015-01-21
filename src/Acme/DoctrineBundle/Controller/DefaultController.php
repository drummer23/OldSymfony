<?php

namespace Acme\DoctrineBundle\Controller;

use Acme\DoctrineBundle\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeDoctrineBundle:Default:index.html.twig', array('name' => $name));
    }

    public function createAction($name)
    {
        $person = new Person();
        $person->setName($name);
        $person->setCity('Zurich');

        $em = $this->getDoctrine()->getManager();

        $em->persist($person);
        $em->flush();


        return new Response("<html><body>Person $name created</body></html>");
    }

    public function showAction($id)
    {
        $person = $this->getDoctrine()
            ->getRepository('AcmeDoctrineBundle:Person')
            ->find($id);

        if (!$person) {
            throw $this->createNotFoundException(
                'No person found for id '.$id
            );
        }

        return new JsonResponse((array) $person);
    }
}
