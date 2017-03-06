<?php
include "../public/session.php";
include "../public/db.php";
include "../public/function.php";
$pid=$_GET["id"];
$sql="delete from position where pid=".$pid;
$db->query($sql);
if($db->affected_rows>0){
    $message="删除成功！";
    $url="updatep.php";
    include "message.html";
    exit;
}
?>