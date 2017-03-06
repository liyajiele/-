<?php
	include "../public/session.php";
	include "../public/db.php";
	$pname=$_GET["pname"];
	$sql="insert into position (pname) values ('$pname')";
	$db->query($sql);
	
	if($db->affected_rows>0){
		$message="添加成功！";
		$url="addpos.php";
		include "message.html";
		exit;
	}else{
		$message="添加失败！";
		$url="addpos.php";
		include "message.html";
		exit;
	}
?>