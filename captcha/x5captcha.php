<?php
include("../res/x5engine.php");
$nameList = array("j34","uwr","x4e","a4h","ff3","3z2","ult","enc","yjj","asu");
$charList = array("R","R","M","3","R","4","S","8","K","W");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
