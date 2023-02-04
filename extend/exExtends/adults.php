<?php

namespace exExtends;
// nếu class không có hàm khởi tạo thì sẽ nhận của cha và ngược lại s nhận của chính nó

class adults extends people
{
public $longNach;
public function __construct($chan, $tay, $mat, $mui , $longNach)
{
    parent::__construct($chan, $tay, $mat, $mui);
    $this->longNach=$longNach;
//    parent::__construct($chan, $tay, $mat, $mui);
}

    public function go() {
        echo 'người lớn đi bằng ' . $this->chan . "chân" . "</br>";
    }
    public function di() {
        echo "đi bằng" . $this->chan . "chân" . $this->tay."tay" . $this->mat."mắt" . $this->mui."mũi" . $this->longNach.'lông nách';
    }

    /**
     * @param mixed $chan
     */
    public function speaker() {

    }
}