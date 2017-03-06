<?php            //往数据库添加用户
     include "../public/db.php";
     $usename=$_POST["usename"];
//   echo "$usename";
     $password=md5($_POST["password"]);
//   echo "$password";
    
     $db->query("insert into user(usename,password,role) values ('$usename','$password','1')");
//   echo "insert into user(usename,password,role) values ('$usename','$password','1')";
     if($db->affected_rows>0){          
     	echo "<script>alert('注册成功！');location.href='login.php'</script>";
     }
	
	
?>