<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>注册</title>
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
	        <div class="top_Title">注册</div>
	        <!--<div class="top_More"><img src="__PUBLIC__/images/Icon_more.png" /></div>-->
	    </div> 
	    
		<!-- ---------用户注册---------- -->  
		<form action="__URL__/doReg" method="post" name="regForm">
			<div class="register_Box">
		        <h1 class="l_Title">用户注册</h1>
		        <div class="info_Box">
		            <div class="info_Input">
		                <input id="r_Name" class="Inp" type="text" value="" name="r_Name" placeholder="昵称"  />
		                <div class="info_Line"></div>
		                <div class="warning"></div>
		            </div>
		            <div class="info_Input">
		                <input id="r_Tel" class="Inp" type="tel" value="" name="r_Tel" placeholder="手机号"  />
		                <div class="info_Line"></div>
		                <div class="warning"></div>
		                <div class="yanzheng ">
		                	验证码
		                </div>
		            </div>
		            <div class="info_Input" style="width:56%; margin-left:7%;">
		                <input id="g_Psw" class="Inp" type="text" value="" name="g_Psw" placeholder="验证码"  />
		                <div class="info_Line"></div>
		                <div class="warning"></div>
		            </div> 
		            <div class="info_Input">
		                <input id="r_Psw" class="Inp" type="password" name="r_Psw" value="" placeholder="密码"  />
		                <div class="info_Line"></div>
		                <div class="warning"></div>
		            </div> 
		            <div class="info_Input">
		                <input id="r_rePsw" class="Inp" type="password" name="r_rePsw" value="" placeholder="确认密码"  />
		                <div class="info_Line"></div>
		                <div class="warning"></div>
		            </div> 
		        </div>
		        
		        <a href="javascript:;" class="register_Btn">注册</a>
		        
		        <a href="__APP__/Login/login.html" class="back_login">返回登录</a> 
		        
		        <div class="regiter_Success">
		        	<h5>注册成功！</h5>
		            <!--<h6>去登录</h6>-->
		            <a href="__APP__/Index">确定</a>
		        </div>	
			</div>  
		</form>
	</body>
</html>