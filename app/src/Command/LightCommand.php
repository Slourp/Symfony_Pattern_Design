<?php

namespace App\Command;

use App\Light\Command\StopCommand;
use App\Light\Entities\GreenLight;
use App\Light\Entities\RedLight;
use App\Light\Entities\YellowLight;
use App\Light\TrafficControlCenter;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'light:fire',
    description: 'Add a short description for your command',
)]
class LightCommand extends Command
{
    protected function configure(): void
    {
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $greenLight = new GreenLight();    //receiver 1 Green Light
        $redLight = new RedLight();  //receiver 2 Red Light
        $yellowLight = new YellowLight();   //receiver 3 Yellow Light
        $controlCenter = new TrafficControlCenter(); //Invoker

        echo "Stop Command\n";

        $controlCenter->setCommand(new StopCommand($yellowLight, $redLight, $greenLight));
        $controlCenter->executeCommand();
        echo "";
        echo "Ready To Go Command ";

        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return Command::SUCCESS;
    }
}
