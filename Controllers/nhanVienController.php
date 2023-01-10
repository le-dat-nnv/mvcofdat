<?php
require_once "Model/nhanVien.php";
function listStaff()
{
    $listStaff = getStaff();
    return include_once "Views/nhanVien.php";
}

function addStaff() {
    if(isset($_POST['submit']) && $_POST['submit']) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $addnhanvien = addNhanVien($name , $age);
        header('location:index.php');
    }
    return include_once "Views/addNhanvien.php";

}
function updateStaff()
{
    if(isset($_POST['update']) && $_POST['update']) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $update = deleteorsua($id , $name , $age);
        header('location:index.php');
    }
}
function deleteStaff()
{
    if (isset($_GET['id']) && $_GET['id']) {
        $delete = deleteorsua($_GET['id']);
        header('location:index.php');
    }
}

function edit()
{
    if (isset($_GET['id']) && $_GET['id']) {
        $edit = getOne($_GET['id']);
    }
    return include_once "Views/editNhanvien.php";
}

