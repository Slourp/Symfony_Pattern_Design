<?

namespace App\Light;

use App\Cmd\AbstractInvoker;
use App\Cmd\Command;

class TrafficControlCenter extends AbstractInvoker
{
    protected $command;

    // Setting runtime command.
    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    // Invoke appropriate command.
    public function executeCommand()
    {
        $this->command->execute();
    }
}
