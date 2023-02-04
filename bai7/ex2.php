<?php
abstract class shape{
    public $chieudai;
    public $chieurong;
    public $chieucao;
    public function __construct($chieudai , $chieurong , $chieucao)
    {
        $this->chieudai=$chieudai;
        $this->chieurong=$chieurong;
        $this->chieucao=$chieucao;
    }

    abstract public function dientich();
}
class hvuong extends shape {
    public function dientich()
    {
        echo"diện tích của hình vuông là" .  $this->chieudai*$this->chieudai;
        // TODO: Implement dientich() method.
    }
}
class hinhthanh extends shape {
    public function dientich()
    {
        echo"</br></br>diện tích của hình thang là" .  ($this->chieudai+$this->chieurong)*0.25*$this->chieucao;
        // TODO: Implement dientich() method.
    }
}
class hcn extends shape {
    public function dientich()
    {
        echo"</br></br>diện tích của hình chữ nhật là" .  ($this->chieudai*$this->chieurong);
        // TODO: Implement dientich() method.
    }
}
$kq = new hvuong('4' , '3' , '2');
$kq->dientich();
$kq1 = new hinhthanh('4' , '3' , '10');
$kq1->dientich();
$kq2 = new hcn('4' , '3' , '10');
$kq2->dientich();
