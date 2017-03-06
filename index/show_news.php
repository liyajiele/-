<?php 
	include "header.php";
	include "../public/db.php";
	$id=$_GET["id"];
	$sid=$_GET["sid"];
?>
<!--twobanner-->
<!--<link rel="stylesheet" type="text/css" href="../css/public.css"/>-->
<link rel="stylesheet" type="text/css" href="../css/show_news.css"/>
<script src="../js/jquery.min.js"></script>
<!--<script src="../js/show_news.js"></script>-->
	<div class="twobannerbigbox" style="background: url(../images/twobanner.png) no-repeat center;">
		<div class="twobannerbox" style="background: url(../images/twobanner1.jpg) no-repeat;">
		</div>
	</div>
<!--twobanner-->
<!--content-->
	<div class="contentsbigbox">
		<div class="contentsleftbox" style="background: url(../images/contentleft.png) no-repeat;">
			<ul>
				<?php 
					$sql="select * from category where cid=".$id;
					$result=$db->query($sql);
					while($row=$result->fetch_assoc()){ ?>
						<li><a href="list_news.php?id=<?php echo $row["cid"]?>"><?php echo $row["cname"]?></a></li>
					<?php 
					} 
					?>
			</ul>
		</div>
		<div class="contentsrightbox" style="background: url(../images/contentright.png);">
			<div class="contentstop" style="background: url(../images/contentstop.png);">
				<div class="contentstop" style="background: url(../images/contentstop.png);">
				<div class="contentstop-left">
					<?php 
					$sql2="select * from category where cid=".$id;
					$result2=$db->query($sql2);
					while($row2=$result2->fetch_assoc()){ ?>
						<span class="contentstopwenzi1"><?php echo $row2["cname"]?></span>
						<span class="contentstopwenzi2">news</span>
				</div>
				<div class="contentstop-right">
					<a href="{siteurl($siteid)}">首页</a><span>&gt;</span>
					<span><?php echo $row2["cname"]?></span>
				</div>
				<?php 
					} 
					?>
			</div>
			</div>
			<?php 
				$sql3="select * from shows where sid=".$sid;
				$result3=$db->query($sql3);
				while($row3=$result3->fetch_assoc()){ ?>
			<div class="contentsbottom">
				<p class="contentsbottomc1"><?php echo $row3['stitle']?></p>
				<p class="contentsbottomc2">浏览次数：23&nbsp;日期：<?php echo $row3['stime']?></p>
				<div class="contentsbottomc">
					<?php echo $row3["scon"]?>
					<img src="<?php echo $row3["imgurl"]?>" alt="" class="center"/>
				</div>
				<div class="contentsbottomxuanze">
					<span>上一篇：</span><a href="show_news.php?id=<?php echo $row3["cid"]?>&sid=<?php echo $row3["sid"]-1?>"><?php echo $row3["stitle"]?></a><br />
                <span>下一篇：</span><a href="show_news.php?id=<?php echo $row3["cid"]?>&sid=<?php echo $row3["sid"]+1?>"><?php echo $row3["stitle"]?></a>
				</div>
			</div>
				<?php 
				} 
				?>
		</div>
	</div>
<!--content-->
<?php
	include "footer.php";
?>

