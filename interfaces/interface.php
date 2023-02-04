<?php
interface dichuyen{
    // định nghĩ 1 phương thức trừng tượng
    public function chay();
}

class concho implements dichuyen{
    public function show() {
        echo "con chó ";
    }
    public function chay()
    {
        // TODO: Implement chay() method.
    }
}
class oto implements dichuyen{
    public function chay()
    {
        echo "chạy bằng 4 bánh";
    }
}
$tt = new concho();
$tt->show();