<?php

namespace Acme\LoggerBundle\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction()
    {
        /** @var LoggerInterface $logger */
        $id = uniqid();

        $logger = $this->get('logger');
        $logger->info(sprintf('{ID: %s} I just got the logger', $id));
        $logger->info(sprintf('{ID: %s} An error occured', $id));

        return new Response('<html><body>' . sprintf('messages have been logged with prefix {ID: %s}', $id) . '</body></html>');
    }
}
