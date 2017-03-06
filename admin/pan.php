<?php     //判断后台用户与输入用户是否一样
    session_start();
    include "../public/db.php";
    $usename=$_POST["usename"];
//  echo "$usename";
	$_SESSION["login"]="yes";
    $password=md5($_POST["password"]);
    $sql="select * from user";
    $result=$db->query($sql);
    while($row=$result->fetch_assoc()){
    	if($row["usename"]==$usename){
    		if($row["password"]==$password){
    			$_SESSION["is_login"]="yes";
    			$_SESSION["usename"]=$usename;
     	        echo "<script>location.href='main.php'</script>";
    			
//				include "admin.php";
    			exit;
    		}
    	}
    }	
     	        echo "<script>location.href='login.php'</script>";
    
//  include "login.php";
	exit;

	
?>