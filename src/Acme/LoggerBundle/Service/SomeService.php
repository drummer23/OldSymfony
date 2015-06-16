<?php
/**
 * Created by PhpStorm.
 * User: rspielmann
 * Date: 16.06.2015
 * Time: 17:15
 */

namespace Acme\LoggerBundle\Service;


use Psr\Log\LoggerInterface;

class SomeService {

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    /**
     * @param $id
     */
    public function doSomething($id) {
        $this->getLogger()->info(sprintf('{ID: %s} a service is loggin too', $id));
    }

    /**
     * @return LoggerInterface
     */
    public function getLogger()
    {
        return $this->logger;
    }

}