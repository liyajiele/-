<?php
include "../public/session.php";
include "../public/db.php";
include "../public/function.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="addUserInfo.php" method="post">
    	角色：<select name="role" id="">
	    		<option selected="selected">1</option>
	    		<option>2</option>
    	     </select><br />
    	账号：<input type="text" name="usename" /><br />
    	密码：<input type="text" name="password" /><br />
    	<input type="submit" value="添加"/>
    </form>
</body>
</html>
