<?php
	/*
	 * 通过aspx接口发送短信
	 * 开发环境：php7.0.9,windows10 专业版,Eclipse for PHP Developers
	 * 联系方式 ：346910917@qq.com,18611729367
	 */
    include "MessageSend.class.php";
    
    $account="";						//改为实际账户名
    $password="";						//改为实际短信发送密码
    $mobiles="18611729367";				//目标手机号码，多个用半角“,”分隔
    $extno = "";
    $content="您的验证码是：8859【签名】】";
    $sendtime = "";

    $result=MessageSend::send($account,$password,$mobiles,$extno,$content,$sendtime);
    $xml = simplexml_load_string($result);
    echo "返回信息提示：".$xml->message."\n";
    echo "返回状态为：".$xml->returnstatus."\n";
    echo "返回信息：".$xml->message."\n";
    echo "返回余额：".$xml->remainpoint."\n";
    echo "返回本次任务ID：".$xml->taskID."\n";
    echo "返回成功短信数：".$xml->successCounts."\n";
?>