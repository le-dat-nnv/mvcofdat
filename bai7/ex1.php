<?php
abstract class personAbstract {
    abstract public function chay();
}
class adultsAbstract extends personAbstract {
    public function chay()
    {
        echo "con chó chạy bằng bao nhiêu chân nhỉ";
        // TODO: Implement chay() method.
    }
}
$cc = new adultsAbstract();
$cc->chay();