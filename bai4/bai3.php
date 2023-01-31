<?php
class hocsinh {
    public $name;
    public $year;
    public $address;
    public $diemmath;
    public $diemly;
    public $diemhoa;

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param mixed $diemly
     */
    public function setDiemly($diemly)
    {
        $this->diemly = $diemly;
    }

    /**
     * @param mixed $diemhoa
     */
    public function setDiemhoa($diemhoa)
    {
        $this->diemhoa = $diemhoa;
    }

    /**
     * @param mixed $diemmath
     */
    public function setDiemmath($diemmath)
    {
        $this->diemmath = $diemmath;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = 2023 - $year;
    }
    public function xeploai() {
if($this->diemtb()<4) {
echo "xếp loại của học sinh đó là loại yếu";
}
else if ($this->diemtb()>=4 && $this->diemtb()<6) {
    echo "xếp loại của học sinh đó là loại trung bình";
}
else if($this->diemtb()>=6 && $this->diemtb()<8) {
    echo "xếp loại của học sinh đó là loại khá";
}
else {
    echo "xếp loại của học sinh đó là loại giỏi";
}
    }
    public function diemtb() {
        $diemtb = ($this->diemmath + $this->diemhoa + $this->diemly)/3;
        return $diemtb;
    }
    public function getinformation() {
        echo "tên của học sinh đó là  " . $this->name . "</br>";
        echo "tuổi của học sinh đó là " . $this->year . "</br>";
        echo "điểm trung binh của học sinh đó là" . $this->diemtb() . "</br>";
    }
}
$hocsinh1 = new hocsinh();
$hocsinh1->setYear(2003);
$hocsinh1->setName('lê huy đạt');
$hocsinh1->setAddress('thanh hóa');
$hocsinh1->setDiemhoa(7);
$hocsinh1->setDiemly(6);
$hocsinh1->setDiemmath(8);
$hocsinh1->getinformation();
$hocsinh1->xeploai();