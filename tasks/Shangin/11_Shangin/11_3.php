<?php
    $host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'mydb';      // имя базы данных
	
	$link = mysqli_connect($host, $user, $pass, $name);
	mysqli_query($link, "SET NAMES 'utf8'");

    $query1 = "SELECT * FROM users WHERE id=3";
    $query2 = "SELECT * FROM users WHERE salary=900";
    $query3 = "SELECT * FROM users WHERE age=23";
    $query4 = "SELECT * FROM users WHERE salary>400";
    $query5 = "SELECT * FROM users WHERE salary>=500";
    $query6 = "SELECT * FROM users WHERE salary!=500";
    $query7 = "SELECT * FROM users WHERE salary<=500";


    
?>