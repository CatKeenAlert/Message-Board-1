<?php
	class LoginAction extends Action{
		public function Login(){
			$this->display();
		}
		public function doLogin(){
//			echo "<pre>";
//			var_dump($_GET);
//			die;
			$tel = $_POST['Tel'];
			$psd = $_POST['Psw'];
			$user = M("User");
			$where['r_Tel']=$tel;
			$arrTel = $user->where($where)->count();
			$where['r_Psw']=$psd;
			$arrPsd = $user->where($where)->count();
			
			if(!$arrTel){  //账号不存在
				echo json_encode(array('status'=>0));
				die();
			}else if(!$arrPsd){  //密码有误
				echo json_encode(array('msg'=>0));
				die;
			}else{
				echo json_encode(array('sus'=>1));
				$_SESSION['r_Tel']=$tel;
//				$this->redirect('Index/index');
			}
			
		}
		public function doLogout(){
			//清session 3个步骤
			$_SESSION=array();
			if(isset($_COOKIE[session_name()])){
				setcookie(session_name(),'',time()-1,'/');
			}
			session_destroy();
			
			$this->redirect('Index/index');
		}
	}
?>


