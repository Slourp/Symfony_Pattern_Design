<?php

namespace App\Cmd;



abstract class AbstractInvoker implements IInvoker
{
    protected $command;

    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    public function executeCommand()
    {
        $this->command->execute();
    }
}
