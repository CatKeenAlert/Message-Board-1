<?php
header("content-type:text/html; charset=utf-8");

include 'HttpSend.php';

 
    session_start();//��������
    if (isset($_SESSION['time']))//�жϻ���ʱ��
    {
        session_id();
        $_SESSION['time'];
    }
    else
    {
        $_SESSION['time'] = date("Y-m-d H:i:s");
    }
    $_SESSION['mcode']=$_GET['mcode'];//��content��ֵ������session��
////����õ��ֻ���



  $mobile=$_GET['mobile'];
  
//  var_dump($mobile);
  
if($mobile<>"") {
  // echo $mobile;//�õ��ֻ���
   // echo $_SESSION['mcode'];//���Եõ�����֤��
 //  echo '<br/>';
    if((strtotime($_SESSION['time'])+60)<time()) {//����ȡ�Ļ���ʱ��ת����ʱ�������600����뵱ǰʱ��Ƚϣ�С�ڵ�ǰʱ�伴Ϊ����
        session_destroy();
        unset($_SESSION);
        // echo '<script>alert("��֤���ѹ��ڣ������»�ȡ��");</script>';
    }
    else{
$sender = new HttpSend();
//����Ϊ�������,����ʱ���޸�,���Ĳ�����ת��
$strReg = "101100-WEB-HUAX-111326";   //ע���(�ɻ�����ͨ�ṩ)
$strPwd = "AAAAAAAA";                 //����(�ɻ�����ͨ�ṩ)
$strSourceAdd = "";                   //��ͨ���ţ���Ϊ�գ�Ԥ������һ��Ϊ�գ�
$strPhone = $mobile;//�ֻ����룬����ֻ����ð�Ƕ��ŷֿ������1000��
$strContent = $sender->gbkToUtf8("������֤���ǣ�".$_SESSION['mcode']."��һ��������Ч����������ͶƱ��лл�������о�����");   //��������
//���²���Ϊ������URL,�Լ������������Ĳ����������޸�
$strSmsUrl = "http://www.stongnet.com/sdkhttp/sendsms.aspx";
$strSmsParam = "reg=" . $strReg . "&pwd=" . $strPwd . "&sourceadd=" . $strSourceAdd . "&phone=" . $strPhone . "&content=" . $strContent;

 $strRes = $sender->postSend($strSmsUrl,$strSmsParam);


echo $strRes;

    }
}
?>
