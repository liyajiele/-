<?php
	include "header.php";
	include "../public/db.php";
	$id=$_GET["id"];
?>
<!--twobanner-->
<link rel="stylesheet" type="text/css" href="../css/public.css"/>
<link rel="stylesheet" type="text/css" href="../css/category.css"/>
<script src="../js/jquery.min.js"></script>
<!--<script src="../js/list.js"></script>-->
<style>
	.contentsleftbox>ul>li{
		background: url(../images/contentleft1.png) no-repeat 0 34px;
	}
	.contentsleftbox>ul>li>a:hover{
		background: url(../images/contentleft2.png) no-repeat;
		color: #491304;
		font-size: 16px;
	}
</style>
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
					$sql="select * from category";
					$result=$db->query($sql);
					while($row=$result->fetch_assoc()){ ?>
						<?php if($row["pid"]==$id){ ?>
						<li><a href="list.php?id=<?php echo $row["cid"]?>&pid=<?php echo $row['pid']?>"><?php echo $row["cname"]?></a></li>
						<?php } ?>
					<?php 
					} 
					?>
			</ul>
		</div>
		<div class="contentsrightbox" style="background: url(../images/contentright.png);">
			<div class="contentstop" style="background: url(../images/contentstop.png);">
				<div class="contentstop-left">
					<?php 
					$sql1="select * from category";
					$result1=$db->query($sql1);
					while($row1=$result1->fetch_assoc()){ ?>
						<?php if($row1["cid"]==$id){ ?>
							<span class="contentstopwenzi1"><?php echo $row1["cname"]?></span>
						
					
					<!--<span class="contentstopwenzi1">{$CATEGORYS[$top_parentid][catname]}</span>
					<span class="contentstopwenzi2">{$CATEGORYS[$top_parentid][catdir]}</span>-->
				</div>
				<div class="contentstop-right">
					<a href="index.php">首页</a><span>&gt;</span><span><?php echo $row1["cname"]?></span>
				</div>
				<?php }?>
				<?php 
					} 
					?>
			</div>
			<div class="contentsbottom">	
				<?php 
					if($id==33){
						$sql="select * from shows where cid=40";
					}else if($id==34){
						$sql="select * from shows where cid=41";
					}else if($id==35){
						$sql="select * from shows where cid=42";
					}else if($id==36){
						$sql="select * from shows where cid=43";
					}else if($id==37){
						$sql="select * from shows where cid=44";
					}else{
						$sql="select * from shows where cid=38";
					}
					$result=$db->query($sql);
					while($row=$result->fetch_assoc()){ ?>
							<h3><?php echo $row["stitle"]?></h3>
							<p><?php echo $row["scon"]?></p>
						    <img src="<?php echo $row['imgurl']?>" alt="" />	
					<?php 
					} 
					?>
					
			</div>
		</div>
	</div>
<!--content-->
<?php
	include "footer.php"
?>
