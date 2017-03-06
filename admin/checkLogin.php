<?php
    session_start();
    include "../public/db.php";
    $usename=$_POST["usename"];
    $password=md5($_POST["password"]);

    $sql="select * from user";
    $result=$db->query($sql);
    while($row=$result->fetch_assoc()){
        if($row["usename"]==$usename){
            if($row["password"]==$password){

                $_SESSION["is_login"]="yes";
                $_SESSION["usename"]=$usename;

                $message="登录成功";
                $url="main.php";
                include "message.html";
                exit;
            };
        }
    }

    $message="登录失败";
    $url="login.php";
    include "message.html";

?>