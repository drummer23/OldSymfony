<?php
/**
 * Created by PhpStorm.
 * User: rspielmann
 * Date: 19.11.2014
 * Time: 17:26
 */

namespace Acme\TaskBundle\Entity;


class Task {
    protected $task;

    protected $dueDate;

    public function getTask()
    {
        return $this->task;
    }

    public function setTask($task)
    {
        $this->task = $task;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
    }
} 