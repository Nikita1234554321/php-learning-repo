<?php
	session_start();
    $num1 = 2;
    $num2 = 3;
	$_SESSION = $num1 + $num2;
    echo $_SESSION;
?>