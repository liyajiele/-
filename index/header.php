<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>广州欢腾鞋业有限公司</title>
	<link rel="stylesheet" type="text/css" href="../css/public.css"/>
	<link rel="stylesheet" type="text/css" href="../css/header.css"/>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/header.js"></script>
</head>
<body>
	<div class="topmenubigbox">
		<div class="topmenubox">
			<div class="topmenuleft">
				<div class="topmenudian"></div>
				<span>欢迎进入本网站</span>
			</div>
			<div class="topmenuright" style="background: url(../images/head.png) no-repeat;background-position: 0px 10px;">
				<ul>
					<li><a href="">设为首页</a></li>
					<li><a href="">加入收藏</a></li>
					<li><a href="">联系我们</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="topnavbigbox" id="bg">
		<div class="topnavbox">
			<div class="topnavimg">
				<img src="../images/logo.png"/>
			</div>
			<div class="topnavright">
				<ul class="topnavright1">
					<a href="index.php"><li class="nav1"></li></a>
					<?php 
						include "../public/db.php";
						$sql="select * from category";
						$result=$db->query($sql);
						$i=2;
						while($row=$result->fetch_assoc()){ ?>
						<?php if($row["cid"]==33){?>
							<a href="category_news.php?id=<?php echo $row["cid"]?>"><li class="nav<?php echo $i++?>"></li></a>
						<?php }else if($row["cid"]==34){ ?>
							<a href="category_product.php?id=<?php echo $row["cid"]?>"><li class="nav<?php echo $i++?>"></li></a>
							<?php } else{ ?>
							<a href="category.php?id=<?php echo $row["cid"]?>"><li class="nav<?php echo $i++?>"></li></a>					
						<?php }?>
							
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>