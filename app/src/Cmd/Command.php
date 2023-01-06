<?php

namespace App\Cmd;

use App\Light\Entities\GreenLight;
use App\Light\Entities\RedLight;
use App\Light\Entities\YellowLight;

abstract class Command
{
    abstract function execute();
}
