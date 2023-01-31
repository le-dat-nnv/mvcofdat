<?php
class shape{
    public $chieudai;
    public $chieurong;
    public function information() {
        echo "chiều dài của hình chữ nhật là" . $this->chieudai . "</br>";
        echo "chiều dài của hình chữ rộng là" . $this->chieurong . "</br>";
    }

    /**
     * @return mixed
     */
    public function getChieudai()
    {
        return $this->chieudai;
    }

    /**
     * @param mixed $chieudai
     */
    public function setChieudai($chieudai)
    {
        $this->chieudai = $chieudai;
    }

    /**
     * @return mixed
     */
    public function getChieurong()
    {
        return $this->chieurong;
    }

    /**
     * @param mixed $chieurong
     */
    public function setChieurong($chieurong)
    {
        $this->chieurong = $chieurong;
    }

}
$tt = new shape();
$tt->setChieurong(14);
$tt->setChieudai(20);
$tt->information();