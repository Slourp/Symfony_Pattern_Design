<?php

namespace App\Light\Entities;


class RedLight
{
    public function turnOn()
    {
        echo "Showing Red Light\n";
    }
    public function turnOff()
    {
        echo "Hiding Red Light\n";
    }
}
