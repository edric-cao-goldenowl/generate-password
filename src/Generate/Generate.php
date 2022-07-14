<?php

namespace Edric\Generate;

class Generate
{

    public $lenght = 8;

    public $level;

    public function __construct($lenght, $level)
    {
        $this->lenght = $lenght;
        $this->level = $level;
    }

    public function generator()
    {
        return 4;
    }
}
