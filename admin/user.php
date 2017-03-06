<?php
    include "../public/db.php";
    $usename=$_POST["usename"];
//  echo "$usename";
    $result=$db->query("select * from user");	
    
	while($row=$result->fetch_assoc()){
		if($row["usename"]==$usename){     //如果后台的用户名与输入的一样，则报错
			echo "error";
			exit;
		}
		
	}
	echo "ok";
?>