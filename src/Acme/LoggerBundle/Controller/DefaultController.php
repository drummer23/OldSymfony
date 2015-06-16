<?php

namespace Acme\LoggerBundle\Controller;


use Acme\LoggerBundle\Service\SomeService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction()
    {

        $id = uniqid();

        /** @var LoggerInterface $logger */
        $logger = $this->get('logger');
        $logger->info(sprintf('{ID: %s} I just got the logger', $id));
        $logger->info(sprintf('{ID: %s} An error occured', $id));

        /** @var SomeService $service */
        $service = $this->get('acme_logger.someservice');
        $service->doSomething($id);

        return new Response('<html><body>' . sprintf('messages have been logged with prefix {ID: %s}', $id) . '</body></html>');
    }
}
