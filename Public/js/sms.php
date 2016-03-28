<?php
header("content-type:text/html; charset=utf-8");

include 'HttpSend.php';

 
    session_start();//开启缓存
    if (isset($_SESSION['time']))//判断缓存时间
    {
        session_id();
        $_SESSION['time'];
    }
    else
    {
        $_SESSION['time'] = date("Y-m-d H:i:s");
    }
    $_SESSION['mcode']=$_GET['mcode'];//将content的值保存在session中
////如果得到手机号



  $mobile=$_GET['mobile'];
  
//  var_dump($mobile);
  
if($mobile<>"") {
  // echo $mobile;//得到手机号
   // echo $_SESSION['mcode'];//测试得到的验证码
 //  echo '<br/>';
    if((strtotime($_SESSION['time'])+60)<time()) {//将获取的缓存时间转换成时间戳加上600秒后与当前时间比较，小于当前时间即为过期
        session_destroy();
        unset($_SESSION);
        // echo '<script>alert("验证码已过期，请重新获取！");</script>';
    }
    else{
$sender = new HttpSend();
//以下为所需参数,测试时请修改,中文参数请转码
$strReg = "101100-WEB-HUAX-111326";   //注册号(由华兴软通提供)
$strPwd = "AAAAAAAA";                 //密码(由华兴软通提供)
$strSourceAdd = "";                   //子通道号，可为空（预留参数一般为空）
$strPhone = $mobile;//手机号码，多个手机号用半角逗号分开，最多1000个
$strContent = $sender->gbkToUtf8("您的验证码是：".$_SESSION['mcode']."，一分钟内有效请输入后进行投票。谢谢！【陈列竞赛】");   //短信内容
//以下参数为服务器URL,以及发到服务器的参数，不用修改
$strSmsUrl = "http://www.stongnet.com/sdkhttp/sendsms.aspx";
$strSmsParam = "reg=" . $strReg . "&pwd=" . $strPwd . "&sourceadd=" . $strSourceAdd . "&phone=" . $strPhone . "&content=" . $strContent;

 $strRes = $sender->postSend($strSmsUrl,$strSmsParam);


echo $strRes;

    }
}
?>
