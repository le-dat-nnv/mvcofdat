<?php
class students{
    /*
     * đầy là thuộc tính hay còn gọi là biến
     * */
    public $idStudents;
    public $nameStudents;
    public $yearStudents;
    /*
     * đầy là phương thức hay còn gọi là hàm
     * tính đóng gói
     * tính kế thừa
     * tính trừ tượng
     * tính đa hình
     * đối tuượng là thứ chúng ta có thể tác động vào được
     * đối tượng là những gì chúng ra có thế nhìn và cầm sờ năm được
     *
     * class là 1 khuôn mẫu để tạo ra nhiều đối tượng
     *
     * thuộc tính (đặc điểm ) là những gì góp phần tạo nên đối tượng
     * hành động (phương thức ) là những gì mà đối tượng có th làm được
     *
     * */
    /**
     * @return mixed
     */
    public function getInformations(){
        echo "mã sinh viên" . $this->setIdStudents('ph21045') ."tên sinh viên" . $this->nameStudents . "năm sinh " . $this->yearStudents;
    }

    /**
     * @param mixed $idStudents
     */
    public function setIdStudents($idStudents)
    {
        $this->idStudents = $idStudents;
        return $this->idStudents;
    }

    /**
     * @param mixed $nameStudents
     */
    public function setNameStudents($nameStudents)
    {
        $this->nameStudents = $nameStudents;

    }
    /**
     * @param mixed $yearStudents
     */
    public function setYearStudents($yearStudents)
    {
        $this->yearStudents = $yearStudents;
    }
}
//    $dat = new students();
//    $dat->setNameStudents('Lê Huy Đạt');
//    $dat->setYearStudents('2003');
//    $dat->getInformations();


class giangvien
{
    /*
     * đầy là thuộc tính hay còn gọi là biến
     * */
    public $nameTeacher;
    public $idTeacher;
    public $yearTeacher;
    public $salaryTeacher;
    public $hours;

    /**
     * @return mixed
     */
    public function __construct($nameTeacher , $idTeacher , $yearTeacher , $salaryTeacher){
        $this->nameTeacher = $nameTeacher;
        $this->idTeacher = $idTeacher;
        $this->yearTeacher = $yearTeacher;
        $this->salaryTeacher = $salaryTeacher;
    }

    public function getinformationTeacher()
    {
        echo "tên giảng viên  " . $this->nameTeacher .  "</br>";
        echo "mã số giảng viên   " . $this->idTeacher. "</br>";
        echo "năm sinh của giảng viên  " . $this->yearTeacher .  "</br>";
        echo "lương cơ bản của giảng viên  " . $this->salaryTeacher .  "</br>";
        echo "số giờ dạy học  " . $this->hours . "</br>";
        echo "lương của giảng viên là :  " . $this->luong() .  "</br>";
    }

    /**
     * @return mixed
     */
    public function setIdTeacher($idTeacher)
    {
        $this->idTeacher = $idTeacher;
    }

    /**
     * @param mixed $hours
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
    }

    /**
     * @return mixed
     */
    public function getSalaryTeacher($salary)
    {
        $this->salaryTeacher = $salary;
    }

    /**
     * @param mixed $nameTeacher
     */
    public function setNameTeacher($nameTeacher)
    {
        $this->nameTeacher = $nameTeacher;
    }

    /**
     * @param mixed $yearTeacher
     */
    public function setYearTeacher($yearTeacher)
    {
        $this->yearTeacher = $yearTeacher;
        return $this->yearTeacher;
    }
    public function ageTearcher(){
        $age = 2023 - $this->yearTeacher;
        return $age;
    }
    public function luong() {
        $salary= ($this->salaryTeacher) * ($this->hours);
        return $salary;
    }
    public function xeploai() {
        if($this->luong()>=5000) {
            echo " lương của giảng viên là : đạt" . "</br>" . "</br>";
        }
        else {
            echo "lương của giảng viên là : không đạt" . "</br>" . "</br>";
        }
    }
}
$teacher = new giangvien('đạt' , 'ph21045' , '2003' , 10200);
//$teacher->setIdTeacher('ph022902');
//$teacher->setNameTeacher('thầy Thắng');
//$teacher->setYearTeacher('1997');
//$teacher->setHours(20);
//$teacher->getSalaryTeacher(3000000);
//$teacher->getinformationTeacher();
//$teacher->xeploai();

//
//$teacher1 = new giangvien();
//$teacher1->setIdTeacher('ph022902293');
//$teacher1->setNameTeacher('thầy Thắng 1');
//$teacher1->setYearTeacher('1997');
//$teacher1->setHours(20);
//$teacher1->getSalaryTeacher(30);
//$teacher1->getinformationTeacher();
//$teacher1->xeploai();

