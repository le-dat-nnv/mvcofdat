<?php

namespace exExtends;

class adults extends people
{
public $longNach;
    public function go() {
        echo 'người lớn đi bằng ' . $this->chan . "chân" . "</br>";
    }

    /**
     * @param mixed $chan
     */
    public function speaker() {

    }
}