<?php
	class CommonAction extends Action{
		Public function _initialize(){
		   	//判断用户是否登录过 通过 session
		   	if(!isset($_SESSION['r_Tel']) || $_SESSION['r_Tel']==''){
				$this->redirect("Login/login");
			}
		}
	}
?>