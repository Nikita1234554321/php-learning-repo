<?php
    $host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'mydb';      // имя базы данных
	
	$link = mysqli_connect($host, $user, $pass, $name);
	mysqli_query($link, "SET NAMES 'utf8'");

    $query1 = "SELECT COUNT(*) FROM users WHERE salary=300";
    $query2 = "SELECT COUNT(*) FROM users WHERE salary=300 or age=23";
?>
