<?php

namespace App\Light\Command;

use App\Cmd\Command;
use App\Light\Entities\GreenLight;
use App\Light\Entities\RedLight;
use App\Light\Entities\YellowLight;

class GoCommand
{
    protected $yellowLight;
    protected $redLight;
    protected $greenLight;

    public function __construct(YellowLight $yellowLight, RedLight $redLight, GreenLight $greenLight)
    {
        $this->yellowLight = $yellowLight;
        $this->redLight = $redLight;
        $this->greenLight = $greenLight;
    }

    public function execute()
    {
        $this->greenLight->turnOn();
        $this->redLight->turnOff();
        $this->yellowLight->turnOff();
    }
}
