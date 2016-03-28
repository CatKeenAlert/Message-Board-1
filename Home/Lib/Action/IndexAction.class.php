<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
//		$tel = $_SESSION['r_Tel'];
		$user = M("User");
//		$arr = $user->where($tel)->find();
		
		$message = M("Message");
		$arrMes  = $message->select();
		
		foreach($arrMes as $key=>$val){
			$tel['r_Tel'] = $val['uid'];
			$name = $user->field('r_Name')->where($tel)->find();
			$arrMes[$key]['name'] = $name['r_Name'];
		}
//		dump($arrMes);
			
		$this->assign('list',$arrMes);
		  	
		
    	$this->display();
    }
	public function PostMessage(){
		if(!isset($_SESSION['r_Tel']) || $_SESSION['r_Tel']==''){
			$this->redirect("Login/login");
		}else{
			$this->display();
		}
	}
	public function personal(){
		if(!isset($_SESSION['r_Tel']) || $_SESSION['r_Tel']==''){
			$this->redirect("Login/login");
		}else{
			$this->display();
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
	
//	public function info(){
//		$tel = $_SESSION['r_Tel'];
//		$user = M("User");
//		$arr = $user->where($tel)->find();
//		
//		$message = M("Message");
//		$arrMes  = $message->where($tel)->find();
//		$this->assign('name',$arr['r_Name']);
//		$this->assign('time',$arr1['date']);
//		$this->assign('content',$arr['mesText']);
//		
//	}
	
	public function doMes(){
		//tel name  time message img

		$mesText= $_POST['postMessage'];
		$uid 	= $_SESSION['r_Tel'];
		$date   = time();
		
		$message = M("Message");
//		$message->create();
		$data['mesText']=$mesText;
		$data['date']=$date;
		$data['uid']=$uid;
		$last = $message->add($data);
		if($last){
			$this->redirect('Index/index');
		}else{
			$this->error('失败');
		}


		
		
	}
	
	
}