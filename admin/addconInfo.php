<?php
    include "../public/session.php";
    include "../public/db.php";

    $cid=$_GET["category"];
    $stitle=$_GET["stitle"];
    $scon=$_GET["scon"];
    $imgurl=$_GET["imgurl"];
    $usename=$_SESSION["usename"];

    $sql="insert into shows (cid,stitle,scon,imgurl,usename) values ($cid,'$stitle','$scon','$imgurl','$usename')";

    $db->query($sql);
    if($db->affected_rows>0){
        $message="添加文章成功";
        $url="addcon.php";
        include "message.html";
    }else{
        $message="添加失败";
        $url="addcon.php";
        include "message.html";
    }


?>
