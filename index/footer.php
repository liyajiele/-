<link rel="stylesheet" href="../css/public.css">
<link rel="stylesheet" href="../css/footer.css">
	<!--foot-->
	<div class="footbigbox">
		<div class="footbox">
			<div class="footleft">
				<img src="../images/foot1.jpg"/>
				<img src="../images/foot2.jpg"/>
			</div>
			<div class="footcenter">
				<div class="footcentertop">
					<a href="index.php">首页</a>
					<?php 
						include "../public/db.php";
						$sql="select * from category where pid=0";
						$result=$db->query($sql);
						while($row=$result->fetch_assoc()){ ?>
							<span>|</span>
							<?php if($row["cid"]==2){?>
							<a href="category_news.php?id=<?php echo $row["cid"]?>"><?php echo $row["cname"]?></a>
							<?php } else{ ?>
							<a href="category.php?id=<?php echo $row["cid"]?>"><?php echo $row["cname"]?></a>				
							<?php } ?>
						<?php }?>
				</div>
				<div class="footcenterbottom">
					<span>版权所有：&nbsp;广州欢腾鞋业有限公司&nbsp;&nbsp;&nbsp;备案号：</span>
					<a href="">晋ICP备*****号</a>
					<span>&nbsp;&nbsp;手机：18734563166  &nbsp;&nbsp;&nbsp;&nbsp;固话：400-6505-778</span>
				</div>
			</div>
			<div class="footright">
				<img src="../images/foot3.png" alt="" />
			</div>
		</div>
	</div>

<?php

?>
