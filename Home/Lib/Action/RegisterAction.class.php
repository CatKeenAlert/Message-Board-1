<?php
	class RegisterAction extends Action{
		public function Register(){
			
			$this->display();
		}
		
		public function doReg(){
			$user = M("User");
			$user->create();
			if(!$user->create()){
				$this->error($user->getError());
			}
			
			$lastId = $user->add();
			if($lastId){
				$_SESSION['r_Tel']=$_POST['r_Tel'];
				$this->redirect('Index/index');
//				die;
			}else{
				$this->error('用户注册失败');
			}
		}
	}
?>