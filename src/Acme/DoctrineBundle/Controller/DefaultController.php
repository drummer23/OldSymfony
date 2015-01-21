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

    public function showbynameAction($name)
    {
        $person = $this->getDoctrine()
            ->getRepository('AcmeDoctrineBundle:Person')
            ->findOneByName($name);

        if (!$person) {
            throw $this->createNotFoundException(
                'No person found for name '.$name
            );
        }

        return new JsonResponse((array) $person);
    }

    public function showbycityAction($city)
    {
        $person = $this->getDoctrine()
            ->getRepository('AcmeDoctrineBundle:Person')
            ->findOneByCity($city);

        if (!$person) {
            throw $this->createNotFoundException(
                'No person found for city '.$city
            );
        }

        return new JsonResponse((array) $person);
    }


  /**
   * This function uses a custom repository method
   *
   * @return JsonResponse
   */
    public function showallAction()
    {
        $persons = $this->getDoctrine()
            ->getRepository('AcmeDoctrineBundle:Person')
            ->findAllOrderedByID();


        $personArray = Array();

        foreach($persons as $person)
        {
            $personArray[] = (array)$person;
        }

        return new JsonResponse($personArray);
    }
}
