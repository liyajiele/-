<?php
	include "../public/session.php";
	date_default_timezone_set("Asia/Shanghai");
	$fileInfo=$_FILES["file"];
	if(is_uploaded_file($fileInfo["tmp_name"])){
		if(!file_exists("../upload")){
			mkdir("../upload",0777,true);
		}
		$dirname=date("y-m-d");
		if(!file_exists("../upload/".$dirname)){
			mkdir("../upload/".$dirname,0777,true);
		}
		$filename=time().$fileInfo["name"];
		$path="../upload/".$dirname."/".$filename;
		move_uploaded_file($fileInfo["tmp_name"],$path);
		$imgurl="http://localhost/huantengxieye/upload/".$dirname."/".$filename;
		echo $imgurl;
	}
?>
