<?php
function dd($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        require_once 'Controllers/nhanVienController.php';
        $nhanvien = listStaff();
        break;
    case 'edit':
        require_once 'Controllers/nhanVienController.php';
        $edit = edit();
        break;
    case 'update':
        require_once 'Controllers/nhanVienController.php';
        echo updateStaff();
        break;
    case 'add':
        require_once 'Controllers/nhanVienController.php';
        echo addStaff();
        break;
    case 'delete':
        require_once 'Controllers/nhanVienController.php';
        echo deleteStaff();
        break;
    case 'nhanVien':
        require_once 'Controllers/nhanVienController.php';
        echo addProduct();
        break;

}
