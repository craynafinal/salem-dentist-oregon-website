<?php	
	require_once 'methods.php';
	
	echo htmlTop('Welcome to Salem Dentist of Oregon!')
		.veryTop()
		.divider('greenDivider');
		
	if(!isset($_GET['mainPage']))
		$_GET['mainPage'] = 'main';	
	
	$viewPage = $_GET['mainPage'].'.php';
	
	include_once $viewPage;
	
	echo footer()
		.htmlBottom();
?>