<?php
class people {
    public $hoten;
    public $address;
    public $year;
    public $email;
    public $sdt;
    public function __construct($hoten , $email , $address , $sdt , $year)
    {
        $this->hoten = $hoten;
        $this->email = $email;
        $this->address = $address;
        $this->sdt = $sdt;
        $this->year = $year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $sdt
     */
    public function setSdt($sdt)
    {
        $this->sdt = $sdt;
    }
    public function age(){
        $age = 2023 - $this->year;
        return $age;
    }

    /**
     * @param mixed $hoten
     */
    public function setHoten($hoten)
    {
        $this->hoten = $hoten;
    }
    public function getInformation() {
        echo "ten la " . $this->hoten. "<br>";
        echo "age is " . $this->age(). "<br>";
        echo "address is " . $this->address . "<br>";
        echo "email is " . $this->email. "<br>";
        echo "sdt is " . $this->sdt. "<br>";
    }
}
class student extends people {
    public $diemToan;
    public $diemLy;
    public $diemHoa;
public function __construct($hoten, $email, $address, $sdt, $year , $toan , $hoa , $ly)
{
    parent::__construct($hoten, $email, $address, $sdt, $year);
    $this->diemToan = $toan;
    $this->diemHoa=$hoa;
    $this->diemLy=$ly;
}

    /**
     * @param mixed $diemHoa
     */
    public function setDiemHoa($diemHoa)
    {
        $this->diemHoa = $diemHoa;
    }

    /**
     * @param mixed $diemLy
     */
    public function setDiemLy($diemLy)
    {
        $this->diemLy = $diemLy;
    }

    /**
     * @param mixed $diemToan
     */
    public function setDiemToan($diemToan)
    {
        $this->diemToan = $diemToan;
    }
    public function diemTb() {
        $diemTb = ($this->diemLy + $this->diemHoa + $this->diemToan)/3;
        return $diemTb;
}
    public function getStudent() {
        echo 'diemTb is' . $this->diemTb();
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
$student = new student('lê huy đạt' , 'ledat@fpt.edu/.vn' , 'thanh hóa việt nam ' , '02890147' , '2003' , '9' , '7' , '9');
//$student->setYear('2003');
//$student->setAddress('vietname');
//$student->setSdt('0123456789');
//$student->setHoten('le huy dat');
//$student->setEmail('lehuydat02974@gamil.com');
$student->getInformation();
//$student->setDiemHoa('7');
//$student->setDiemLy('5');
//$student->setDiemToan('8');
$student->diemTb();
$student->getStudent();