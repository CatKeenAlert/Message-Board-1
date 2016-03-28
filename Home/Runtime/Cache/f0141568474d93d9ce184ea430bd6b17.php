<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>登录</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/index.css"/>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/login.css"/>
		<script src="__PUBLIC__/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="__PUBLIC__/js/quo.js" type="text/javascript" charset="utf-8"></script>
		<script src="__PUBLIC__/js/login.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
		<!-- --------------顶部----------------- -->
		<div class="top_Box">
	    	<a href="javascript:history.go(-1)" class="top_Classify"><img src="__PUBLIC__/images/left_jiantou.png" /></a>
	        <div class="top_Title">登录</div>
	        <!--<div class="top_More"><img src="__PUBLIC__/images/Icon_more.png" /></div>-->
	    </div> 
	    
		<!-- ---------用户登录---------- -->  
    	<div class="login_Box">
            <h1 class="l_Title">用户登录</h1>
            <form action="__URL__/doLogin" method="post" name="logForm">
	            <div class="info_Box">
	                <div class="info_Input">
	                    <input id="Tel" class="Inp" type="text" value="" name="Tel" placeholder="手机号"  />
	                    <div class="info_Line"></div>
	                    <div class="warning"></div>
	                </div>
	                <div class="info_Input">
	                    <input id="Psw" class="Inp" type="password" value="" name="Psw" placeholder="密码"  />
	                    <div class="info_Line"></div>
	                    <div class="warning"></div>
	                </div> 
	            </div>
	            <a href="javascript:;" class="login_Btn">登录</a>
            </form>
            
            <a href="__APP__/Register/register.html" class="register">免费注册</a>
            <a href="__APP__/Index/index.html" class="backHome">返回首页</a>
        </div>
        
        <script type="text/javascript">
        	$(function(){
        		$(".login_Btn").on("tap",function(){
        			var tel = $("#Tel").val();
        			var psw = $("#Psw").val();
					$.ajax({
						type:'post',
						url:'__URL__/doLogin',
						async:false,
						data:{
							Tel:tel,
							Psw:psw,
						},
						success:function(data){
							var result = eval('('+data+')');
							if(result.status == 0){
								$("#Tel").next().next().css('display','block');
								$("#Tel").next().css('border-color','#eb413d'); 
							}else if(result.msg == 0){
								$("#Psw").next().next().css('display','block');
								$("#Psw").next().css('border-color','#eb413d'); 
							}else if(result.sus == 1){
								$('form[name="logForm"]').submit();	
								window.location.href='__APP__/Index/index';
							}
							
						},
						error:function(){
							alert('连接错误');
						}
					})
        		})
        	})
        </script>
	</body>
</html>