<?php
    include "../public/db.php";
    include "../public/session.php";
    
//  $uid=$_POST["uid"];
    $role=$_POST["role"];
    $usename=$_POST["usename"];
    $password=$_POST["password"];
    $sql="insert into user (usename,password,role) values ('$usename','$password','$role')";
    
    $db->query($sql);
    if($db->affected_rows>0){
        $message="添加用户成功";
        $url="addUser.php";
        include "message.html";
    }else{
        $message="添加失败";
        $url="addUser.php";
        include "message.html";
    }
    
?>