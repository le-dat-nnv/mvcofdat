<?php

namespace exExtends;

class people
{
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    public function __construct($chan , $tay , $mat , $mui)
    {
        $this->chan=$chan;
        $this->tay=$tay;
        $this->mat=$mat;
        $this->mui=$mui;
    }

    public function eat() {
        echo "the people is eat mouth" . "</br>";
    }

    /**
     * @param mixed $chan
     */
    public function setChan($chan)
    {
        $this->chan = $chan;
    }

    /**
     * @param mixed $tay
     */
    public function setTay($tay)
    {
        $this->tay = $tay;
    }
}