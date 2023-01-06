<?php

namespace App\Light\Command;

use App\Cmd\Command;
use App\Light\Entities\GreenLight;
use App\Light\Entities\RedLight;
use App\Light\Entities\YellowLight;

class GoCommand extends Command
{
    public function __construct(
        protected YellowLight $yellowLight,
        protected RedLight $redLight,
        protected GreenLight $greenLight
    ) {
    }

    public function execute()
    {
        $this->yellowLight->turnOn();
        $this->redLight->turnOn();
        $this->greenLight->turnOff();
    }
}
