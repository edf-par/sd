<?php
//--------------------------//
include('../assets/srv/funciones.php');
include('../assets/srv/app.php');
//--------------------------//
error_reporting(0);
$random    = rand(0,100000).$_SERVER['REMOTE_ADDR'];
$random1    = substr(md5($random), 0, 20);
$random2 = substr(md5($random), 0, 14);
$random3 = substr(md5($random), 0, 8);
$random4 = substr(md5($random), 0, 50);


header('location:./login.php?S'.$random1.'?id'.$random2.'?task'.$random3.'');
exit;

?>