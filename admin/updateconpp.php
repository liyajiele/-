<?php
	include "../public/session.php";
	include "../public/db.php";
	include "../public/function.php";
	$id=$_GET["id"];
	$result=$db->query("select * from position where pid=".$id);
	$row=$result->fetch_assoc();
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
<form action="updateconp.php">
    修改推荐位：<input type="text" value="<?php echo $row['pname'];?>" name="pname"  />
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <br/>
    <input type="submit" value="修改" id="submit">
</form>
</body>
<html>
