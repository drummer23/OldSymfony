<?php

namespace Acme\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $birthday = new \DateTime('1977-10-17');

        $ageService = $this->get('acme_service.age');
        $age = $ageService->getAge($birthday);

        return new Response('<html><body>Your age is ' . $age->y . '</body></html>');
    }
}
