<?php
    include "../public/db.php";
    include "../public/session.php";
    $id=$_GET["id"];
    $sql="delete from user where uid=".$id;
     
    $db->query($sql);
    if($db->affected_rows>0){
        $message="删除用户成功";
        $url="edituser.php";
        include "message.html";
    }else{
        $message="删除失败";
        $url="edituser.php";
        include "message.html";
    }
?>