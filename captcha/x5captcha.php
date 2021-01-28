<?php
include("../res/x5engine.php");
$nameList = array("tuh","w8e","cn8","axa","p3j","shm","v6w","rm7","ck2","ggt");
$charList = array("C","L","Z","W","6","5","N","T","T","W");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
