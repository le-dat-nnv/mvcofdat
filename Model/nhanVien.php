<?php

require_once 'Model/db.php';
function getStaff()
{
    $sql = "SELECT * FROM `staff`";
    return getData($sql);

}
function addNhanVien( $nameStaff , $ageStaff)
{
    $sql = "INSERT INTO `staff`(`nameStaff`, `ageStaff`) VALUES ('$nameStaff','$ageStaff')";
    return getData($sql);

}
function getOne($id)
{
    $sql = "SELECT * FROM `staff` where id=".$id;
    return getData($sql , false);

}
function deleteorsua($id , $nameStaff = null , $ageStaff=null)
{
    if((!empty($nameStaff)) && (!empty($ageStaff))) {
        $sql = "UPDATE `staff` SET `nameStaff`='$nameStaff',`ageStaff`='$ageStaff' WHERE id=".$id;
        var_dump($sql);
    }
    else {
        $sql = "DELETE FROM `staff` WHERE id=".$id;
    }
    return getData($sql);

}