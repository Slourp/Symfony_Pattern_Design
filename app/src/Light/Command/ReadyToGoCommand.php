<?php

namespace App\Light\Command;

use App\Cmd\Command;
use App\Light\Entities\GreenLight;
use App\Light\Entities\RedLight;
use App\Light\Entities\YellowLight;

class ReadyToGoCommand extends Command
{
    public function __construct(
        YellowLight $yellowLight,
        RedLight $redLight,
        GreenLight $greenLight
    ) {
        parent::__construct(
            $yellowLight,
            $redLight,
            $greenLight
        );
    }

    public function execute()
    {
        $this->yellowLight->turnOn();
        $this->redLight->turnOn();
        $this->greenLight->turnOff();
    }
}
