<?php

    include "../public/db.php";
    $usename=$_POST["usename"];
    $password=md5($_POST["password"]);

    $sql="insert into user (usename,password,role) values ('$usename','$password','1')";

    $db->query($sql);
    if($db->affected_rows>0){
        $message="注册成功";
        $url="login.php";
        include "message.html";
    }else{
        echo "注册失败";
    }



?>