<?php
class person {
    public $name;
    public $address;
    public $gtinh;
    public $brithday;

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $brithday
     */
    public function setBrithday($brithday)
    {
        $this->brithday = $brithday;
    }

    /**
     * @param mixed $gtinh
     */
    public function setGtinh($gtinh)
    {
        $this->gtinh = $gtinh;
    }

    public function getInformation() {
        echo "ten la " . $this->name. "<br>";
        echo "ngày sinh là " . $this->brithday. "<br>";
        echo "address is " . $this->address . "<br>";
        echo "giới tính là" . $this->gtinh. "<br>";
    }
}
class students extends person {
    public $masv;
    public $diemtb;
    public $email;

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $masv
     */
    public function setMasv($masv)
    {
        $this->masv = $masv;
    }

    /**
     * @param mixed $diemtb
     */
    public function setDiemtb($diemtb)
    {
        $this->diemtb = $diemtb;
        return $this->diemtb;
    }
    public function getStudent() {
        echo 'MÃ SINH VIÊN LÀ' . $this->masv . "</br>";
        echo 'email của sinh viên là' . $this->email . "</br>";
        echo 'điểm trung bình của sinh viên là' . $this->diemtb . "</br>";
        echo 'sinh vien' . $this->setHocBong() . "</br>";
    }
    public function setHocBong() {
        if($this->setDiemtb($this->diemtb)>8) {
            echo "bạn đã nhận đưuọc học bổng";
        }
        else {
            echo "";
        }
    }
}
class giangVien {
    public $luongCb;
    public $soGioDay;

    /**
     * @param mixed $luongCb
     */
    public function setLuongCb($luongCb)
    {
        $this->luongCb = $luongCb;
    }

    /**
     * @param mixed $soGioDay
     */
    public function setSoGioDay($soGioDay)
    {
        $this->soGioDay = $soGioDay;
    }
    public function tongLuong() {
        $tongluong = $this->luongCb * $this->soGioDay;
        return $tongluong;
    }
    public function getGiangVien() {
    }
}

$student = new students();
$student->setName('LÊ HUY ĐẠT');
$student->setAddress('vietname');
$student->setGtinh('NAM');
$student->setBrithday('23/01/2003');
$student->getInformation();
$student->setDiemtb('9');
$student->setEmail('LEDAJAFD@FPT.COM');
$student->setMasv('PH21045');
$student->getStudent();

//--------------------------------------- bài 2

class toanhoc{
    public function tong() {

    }
    public function hieu(){

    }
    public function tich() {

    }
    public function thuong() {

    }
    public function mu() {

    }
    public function checkNle() {

    }
    public function checkSNT() {

    }
    public function checkSHH() {

    }
}
class checkso extends toanhoc{
    public $number;

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }
    public function checkSNT() {

    }
}