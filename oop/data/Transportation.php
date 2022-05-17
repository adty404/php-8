<?php

class LionAir
{
    public string $rute;
    public function __construct(string $rute)
    {
        $this->rute = $rute;
    }
}

class BatikAir extends LionAir
{
}

class WingsAir extends LionAir
{
}

class Airport
{
    public LionAir $lion_air;
}

// polymorphism pada sebuah function
function flightRoute(LionAir $lion_air)
{
    echo "New Flight Schedule : $lion_air->rute" . PHP_EOL;
}