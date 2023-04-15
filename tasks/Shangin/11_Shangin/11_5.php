<?php
    $host = 'localhost'; // имя хоста
    $user = 'root';      // имя пользователя
    $pass = '';          // пароль
    $name = 'mydb';      // имя базы данных
	
    $link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf8'");

    $query1 = "SELECT 'name', age, salary FROM users WHERE id  >= 1"
    $query2 = "SELECT 'name' FROM users WHERE id >= 1";


    
?>
