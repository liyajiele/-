<?php
include "../public/session.php";
include "../public/db.php";
$id=$_GET["id"];
$pname=$_GET["pname"];
$sql="update position set pname='$pname' where pid=".$id;
$db->query("$sql");

if($db->affected_rows>0){
    $message="修改成功！";
    $url="updatep.php";
    include "message.html";
    exit;
}else{
	$message="修改失败！";
	$url="updatep.php";
	include "message.html";
	exit;
}
	
?>