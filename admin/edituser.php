<?php
     include "../public/db.php";
     include "../public/session.php";
     $sql="select * from user";
     $result=$db->query($sql);
     
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>编辑</title>
</head>
<style>
	table{
		height: 500px;
		width: 700px;
		margin: 0 auto;
		border-collapse: collapse;
	}
	thead{
		height: 30px;
		line-height: 30px;
		text-align: center;
		background: palegoldenrod;
		color: #000000;
	}
	tr,td{
		height: 30px;
		text-align: center;
		line-height: 30px;
		border: 1px solid #000;
	}
</style>
<body>
	<table>
		<thead>
			<tr>
				<td>role</td>
				<td>用户名</td>
				<td>密码</td>
				<td>编辑</td>
			</tr>
		</thead>
		<tbody>
			<?php
				while($row=$result->fetch_assoc()){	?>
				<tr>
					<td><?php echo $row["role"]?></td>
					<td><?php echo $row["usename"]?></td>
					<td><?php echo $row["password"]?></td>
					<td><a href="deluser.php?id=<?php echo $row['uid']?>'">删除</a></td>
					<!--<input type="hidden" name="cang" value="<?php echo $row["uid"]?>" />-->
				</tr>	
					
			<?php
			}
			?>		
		</tbody>
	</table>
</body>
</html>