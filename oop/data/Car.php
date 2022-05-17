<?php

class Car
{
    var $type;
    var $paint;
    var $tire;

    // with tipe data
    // var string $type;
    // var mixed $paint;
    // var int $tire;

    // with default value
    // var string $type;
    // var mixed $paint = "blue";
    // var int $tire;

    // with nullable
    // var string $type;
    // var mixed $paint = "blue";
    // var ?int $tire;

    // add a function
    // function detailEngine(string $type)
    // {
    //     echo "Detail mobil anda saat ini adalah : $type";
    // }

    const COURSE = "Belajar PHP 8" . PHP_EOL;

    function __construct(string $type, ?string $paint)
    {
        $this->type = $type;
        $this->paint = $paint;
    }

    // for this keyword
    function detailEngine(?string $type)
    {
        // use ternary operator
        echo is_null($type) ? "your car Tesla {$this->type}" : "you have 2 Tesla cars with type : {$this->type} & {$type}";
    }


}
