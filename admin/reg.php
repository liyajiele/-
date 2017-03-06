
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>注册</title>
	<script src="../js/jquery.min.js"></script>
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
	}
	input{
		margin-bottom: 10px;
	}
	form{
		margin: 0 auto;
	}
</style>
<body>
	<div class="box">
		<h3>注册</h3>
		<form action="add.php" method="post">
			用户名：<input type="text" name="usename" autocomplete="off"/><span class="message"></span><br />
			密&nbsp;&nbsp;&nbsp;码：<input type="text" name="password" autocomplete="off"/><span class="message"></span><br />
			<input type="submit" value="注册"/>
		</form>
		您已注册，请<a href="login.php">点击登录</a>
	</div>
</body>
<script>
	$(function(){

            var btn=$("input[type=submit]");
            // 1.  用户名
             var reg=/^\w{5,10}$/;
             $("input[name=usename]").keyup(function(){
                 var val=($(this).val());
                 if(!reg.test(val)){
                    $(".message:eq(0)").html("格式有误").css("color","red");
//                  btn.attr("disabled","disabled");
//                  $("input[name=usename]").removeAttr("ok");
                 }else{
                     $.ajax({
                         url:"user.php",     //与后台判断
                         method:"post",
                         data:{usename:val},
                         success:function(e){
                            if(e=="error"){
//                              $("input[name=usename]").attr("ok","ok");
                                $(".message:eq(0)").html("用户名已存在").css("color","red");
//			                  if($("input[name=usename]").attr("ok")=="ok"&&$("input[name=password]").attr("ok")=="ok"){
////                          	btn.removeAttr("disabled");
//                         		 }
                            }else if(e=="ok"){
                                $(".message:eq(0)").html("用户名可用").css("color","green");
//                              btn.attr("disabled","disabled");
//                              $("input[name=usename]").removeAttr("ok");

                            } 
                         }
                     })

                 }
             })



          //2. 密码

          $("input[name=password]").keyup(function(){
              var val=($(this).val());
              if(!reg.test(val)){
                  $(".message:eq(1)").html("格式有误").css("color","red");
//                btn.attr("disabled","true");
                  $("input[name=password]").removeAttr("ok");
              }else{
                  $("input[name=password]").attr("ok","ok");
                  $(".message:eq(1)").html("格式正确").css("color","green");
//	              if($("input[name=usename]").attr("ok")=="ok"&&$("input[name=password]").attr("ok")=="ok"){
////              	 btn.removeAttr("disabled");
//                }
              }
          })




      })
    
</script>
</html>

