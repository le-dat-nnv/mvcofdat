<?php
class math{
    public $a;
    public $b;
    public $c;
    public $delta;
    public function delta() {
        $this->delta = ($this->b*$this->b) - 4*$this->a*$this->c;
}

    /**
     * @param mixed $a
     */
    public function setA($a)
    {
        $this->a = $a;
    }

    /**
     * @param mixed $b
     */
    public function setB($b)
    {
        $this->b = $b;
    }

    /**
     * @param mixed $c
     */
    public function setC($c)
    {
        $this->c = $c;
    }
    public function phuongtrinh() {
        if($this->a == 0) {
            if($this->b==0) {
                echo " phuong trình vô nghiệm";
            }
            else {
                echo " phuong trình có 1 nghiệm duy nhất là " .(-$this->c) / $this->b;
            }
        }
         else if($this->delta>0) {
            echo " phương trình có 2 nghiệm phân biệt </br>";
            echo "x1 = " . (-$this->b + sqrt($this->delta)) / (2 * $this->a) . "</br>";
            echo "x2 = " . (-$this->b - sqrt($this->delta)) / (2 * $this->a);
        }
        else if($this->delta==0) {
            echo "phương trình có 1 nghệm duy nhất</br>";
            echo "x = ". (- $this->b / (2 * $this->a));
        }
        else {
            echo "phương trình vô nghiệm";
        }
}
}
$math = new math();
$math->setA(2);
$math->setB(4);
$math->setC(2);
$math->delta();
$math->phuongtrinh();