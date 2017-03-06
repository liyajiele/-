<?php
    include "../public/session.php";
    include "../public/db.php";
    include "../public/function.php";

    $tree=new abc();
    $tree->tree(0,1,"category",$db);

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
<script src="../js/upload.js"></script>
<style>
	.box{
			height: 300px;
			width: 300px;
			border: 1px solid #000;
			position: relative;
		}
	.img{
		width: 300px;
		height:300px;
	}
	.img img{
		width: 300px;
		height: 300px;
	}
	.progress{
		width: 0%;
		height: 20px;
		position: absolute;
		top: 0;
		left: 0;
		text-align: center;
		line-height: 20px;
		background: lightseagreen;
		
	}
</style>
<script>
		window.onload=function(){
			var submit=document.querySelector(".submit");
			var imgs=document.querySelector("#imgurl");
			var obj=new upload("upload.php",".one",".progress","img");
			obj.uploadStart=function(){
				submit.setAttribute("disabled","disabled");
			}
			obj.up(function(e){
				if(e){
					submit.removeAttribute("disabled");
					imgs.value=e;
				}
			})
		}
</script>
<body>
<form action="addconInfo.php">
         文章分类：<select name="category" id="">
        <?php
        echo $tree->str;
        ?>
    </select>
    <br/>
        文章标题：<input type="text" name="stitle"><br/>
        文章内容：<br/>
    <textarea name="scon" cols="30" rows="10"></textarea><br/>
        上传图片：<input type="file" multiple="multiple" class="one"/>
        <div class="box">
			<div class="img">
				<img src="" alt="" />
			</div>
			<div class="progress">
				
			</div>
		</div>
	<input type="hidden" name="imgurl" id="imgurl" value="" /><br />
    <input type="submit" class="submit" value="添加文章">
</form>
</body>
</html>