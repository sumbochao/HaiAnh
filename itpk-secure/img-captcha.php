<?php
    session_start();
    include("captcha.php");    
     
    $captcha = new Captcha();
	$code = $captcha->get_and_show_image();
	 
	// Lưu code session
	$_SESSION['captcha_code'] = $code;
 ?>