<?php

namespace Soy\Gulp;

use Soy\Task\CliTask;

class RunTask extends CliTask
{
    /**
     * @var string
     */
    protected $binary = './node_modules/.bin/gulp';

    /**
     * @var string
     */
    protected $tasks = ['default'];

    /**
     * @param string $task
     * @return $this
     */
    public function addTask($task)
    {
        $this->tasks[] = $task;
        return $this;
    }

    /**
     * @param string|array $task
     * @return $this
     */
    public function setTask($task)
    {
        $this->tasks = [$task];
        return $this;
    }

    /**
     * @param array $tasks
     * @return $this
     */
    public function setTasks(array $tasks)
    {
        $this->tasks = $tasks;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommand()
    {
        $command = $this->getBinary() . ' ' . implode(' ', $this->tasks);

        if (count($this->getArguments()) > 0) {
            $command .= ' ' . implode(' ', $this->getArguments());
        }

        return $command;
    }
}
