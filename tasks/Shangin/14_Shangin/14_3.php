<?php
	session_start();
	
	$_SESSION['flash'] = 'сообщение';
	header('Location: 14_3p2.php');
?>