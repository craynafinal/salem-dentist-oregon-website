<?php
	require_once('consts.php');
	
	// spam checking using session
	session_start();
	
	if(empty($_SESSION['captcha']) || (strcasecmp($_SESSION['captcha'], $_POST['captcha']) != 0))
		echo arlertAndGoBack('Please enter a valid captcha!');
	else {
		
		$arrFormName = unserialize(WEB_MAIL_FORM_NAME);
		$arrFormValue = unserialize(WEB_MAIL_FORM_VALUE);
		
		$arrMax = sizeof($arrFormName);
		$url = WEB_MAILER;
		
		$check = false;
		$index = 0;
		
		while ($index < $arrMax && !$check)
		{
			if(strlen($_POST["$arrFormValue[$index]"]) <= 0)
				$check = true;
			else
				$index ++; 
		}
		
		if($check)
			echo arlertAndGoBack("Please fill out your $arrFormName[$index]");
		else 
			include_once('webformmailer.php');
	}
		
	function arlertAndGoBack($string)
	{
		return "<script>window.alert ('$string');history.go(-1);</script>";
	}
?>