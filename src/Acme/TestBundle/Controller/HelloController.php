<?php
/**
 * Created by PhpStorm.
 * User: rspielmann
 * Date: 06.11.2014
 * Time: 14:59
 */

namespace Acme\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{

    public function indexAction($name)
    {
        return new Response("<html><body>Hello $name</body></html>");
    }

}