<?php
	unset($_SESSION['id_bailist']);
	unset($_SESSION['hoc-online']);
	unset($_SESSION['logging']); setcookie("email", "", time()-60*60*24*365); setcookie("pass", "", time()-60*60*24*365);
	header("location: http://$config_url/index.html");
?>