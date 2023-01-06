<?

namespace App\Cmd;



interface IInvoker
{
    public function setCommand(Command $command);
    public function executeCommand();
}
