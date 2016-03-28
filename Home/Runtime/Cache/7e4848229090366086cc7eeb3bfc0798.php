<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>我的留言板</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/index.css"/>
	</head>
	<body>
		<!-- --------------顶部----------------- -->
		<div class="top_Box">
	    	<!--<div class="top_Classify"><img src="__PUBLIC__/images/Icon_classify.png" /></div>-->
	        <div class="top_Title">留言板系统</div>
	        <a href="__URL__/personal" class="top_More"><img src="__PUBLIC__/images/Icon_more.png" /></a>
	    </div> 
	    
		<div class="main_Box"> 
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="messageBox">
			    	<div class="mes_T">
			    		<h1 class="fl headImg"><img src="__PUBLIC__/images/05.jpg"/></h1>
			    		<h2 class="fl mes_Info">
			    			<p class="headName"><?php echo ($vo["name"]); ?></p>
			    			<p class="headTime"><?php echo (date( 'm-d H:i',$vo["date"])); ?></p>
			    		</h2>
			    	</div>
			    	<div class="mes_C">
			    		<?php echo ($vo["mesText"]); ?>
			    	</div>
			    </div><?php endforeach; endif; else: echo "" ;endif; ?>
		    <!--<div class="messageBox">
		    	<div class="mes_T">
		    		<h1 class="fl headImg"><img src="__PUBLIC__/images/05.jpg"/></h1>
		    		<h2 class="fl mes_Info">
		    			<p class="headName">旅图灬</p>
		    			<p class="headTime">11-22 15:30</p>
		    		</h2>
		    	</div>
		    	<div class="mes_C">
		    		<p>心怀感恩，生活很美。</p>
		    		<p>思善，言善，行善，常存利人之心，常行利人之举。</p>
		    	</div>
		    </div>-->
	    
		</div>
		
		<a class="foot_Btn" href="__URL__/postMessage">我要留言</a>
	</body>
	<script type="text/javascript">
//		$(function(){
//			$.ajax({
//				type:"post",
//				url:"__URL__/info",
//				async:true,
//				success:function(){
//					
//				}
//			});
//		})
	</script>
</html>