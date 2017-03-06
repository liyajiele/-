
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>登录</title>
</head>
<style>
	.box{
		height: 500px;
		width:500px;
		/*background:pink ;*/
		color: pink;
		border: 1px solid #000;
		margin: 0 auto;

		text-align: center;
	}
	.box h3{
		height: 100px;
		width: 100%;
		line-height: 100px;
		font-size: 30px;
		text-align: center;
		border-bottom: 1px solid #000;
		background: paleturquoise;
		color: #fff;
		margin: 0px;
	}
	input{
		margin-bottom: 20px;
	}
	form{
		margin: 0 auto;
		margin-top: 50px;
		font-size: 20px;
	}
</style>
<body>
	<div class="box">
		<h3>登录</h3>
		<form action="pan.php" method="post">
			用户名：<input type="text" name="usename" autocomplete="off"/><br />
			密&nbsp;&nbsp;&nbsp;码：<input type="text" name="password" autocomplete="off"/><br />
			<input type="submit" value="登录"/>
		</form>
		您还没有注册，请<a href="reg.php">点击注册</a>
	</div>
</body>
</html>











