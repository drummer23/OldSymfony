<?php
/**
 * Created by PhpStorm.
 * User: rspielmann
 * Date: 06.11.2014
 * Time: 14:59
 */

namespace Acme\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RandomController extends Controller
{

	public function indexAction($limit)
	{
		$number = rand(1, $limit);

		return $this->render(
			'AcmeDemoBundle:Random:index.html.twig',
			array('number' => $number)
		);
	}

} 