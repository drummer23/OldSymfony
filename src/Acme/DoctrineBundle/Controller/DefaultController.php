<?php

namespace Acme\DoctrineBundle\Controller;

use Acme\DoctrineBundle\Entity\Person;
use Acme\DoctrineBundle\Entity\Place;
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
        $place = new Place();
        $place->setName('Zurich');
        $place->setPlz('8000');


        $person = new Person();
        $person->setName($name);
        $person->setPlace($place);

        $em = $this->getDoctrine()->getManager();
        $em->persist($place);
        $em->persist($person);
        $em->flush();


        return new Response(
          'Created person id: ' .$person->getId()
          .' and place id: ' .$place->getId()
        );
    }

    public function showAction($id)
    {

        /** @var \Acme\DoctrineBundle\Entity\Person $person */
        $person = $this->getDoctrine()
            ->getRepository('AcmeDoctrineBundle:Person')
            ->find($id);

        if (!$person) {
            throw $this->createNotFoundException(
                'No person found for id '.$id
            );
        }

        $result = Array();

        $result['id'] = $person->getId();
        $result['name'] = $person->getName();
        $result['place'] = $person->getPlace()->getName();


        return new JsonResponse((array) $result);
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

    //TODO: recode for use with new Place table
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
