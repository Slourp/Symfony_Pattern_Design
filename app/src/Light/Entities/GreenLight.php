<?php

namespace App\Light\Entities;

class GreenLight
{
    public function turnOn()
    {
        echo "Showing Green Light\n";
    }
    public function turnOff()
    {
        echo "Hiding Green Light\n";
    }
}
