<?php

namespace Acme\FormBundle\Controller;

use Acme\FormBundle\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function newAction(Request $request)
    {
        // just setup a fresh $task object
        $task = new Task();

        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->add('save', 'submit', array('label' => 'Create Task'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // perform some action, such as saving to database

            return new Response('<html><body>Your task ' . $task->getTask() . ' is set for ' . $task->getDueDate()->format('Y-m-d'). '</body></html>');
        }

        return $this->render(
            'AcmeFormBundle:Default:new.html.twig',
            array(
                'form' => $form->createView(),
            )
        );
    }
}
