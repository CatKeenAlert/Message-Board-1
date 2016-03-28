<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>个人信息</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/index.css"/>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/login.css"/>
	</head>
	<body>
		<!-- --------------顶部----------------- -->
		<div class="top_Box">
	    	<a href="javascript:history.go(-1)" class="top_Classify"><img src="__PUBLIC__/images/left_jiantou.png" /></a>
	        <div class="top_Title">个人信息</div>
	        <!--<a href="__APP__/Index/personal" class="top_More"><img src="__PUBLIC__/images/Icon_more.png" /></a>-->
	    </div> 
	    
		
		<!-- ----个人中心信息---- -->
	    <div class="person_Info">
	    	<div class="per_ScrollBox">
	            <div class="per_Top">
	                <img src="__PUBLIC__/images/per_TopBg.jpg" />
	                <div class="per_Name">
	                    <p class="per_Img"><img src="__PUBLIC__/images/05.jpg"/></p>
	                </div>
	            </div>
	    	
	            <a href="javascript:;" class="per_Phone">
	                <div class="icon_Per"><img src="__PUBLIC__/images/icon_Per_phone.png" /></div>
	                <div class="icon_per_Text">修改手机</div>
	            </a>
	            <a href="javascript:;" class="per_Password">
	                <div class="icon_Per"><img src="__PUBLIC__/images/icon_Per_pwd.png" /></div>
	                <div class="icon_per_Text">修改密码</div>
	            </a>
	            <a href="javascript:;" class="per_Site">
	                <div class="icon_Per"><img src="__PUBLIC__/images/icon_Per_site.png" /></div>
	                <div class="icon_per_Text">收货地址</div>
	            </a>
	            <a href="javascript:;" class="per_Myshop">
	                <div class="icon_Per"><img src="__PUBLIC__/images/icon_Per_favorite.png" /></div>
	                <div class="icon_per_Text">留言板系统</div>
	            </a>
	            <a href="javascript:;" class="per_Myorder">
	                <div class="icon_Per"><img src="__PUBLIC__/images/icon_Per_order.png" /></div>
	                <div class="icon_per_Text">我的订单</div>
	            </a>
	            <a href="__URL__/doLogout" class="per_Eixt">退出登录 </a>
	        </div>
	        
	        
	    </div>
	</body>
</html>