<?php
    $host = 'localhost'; // имя хоста
    $user = 'root';      // имя пользователя
    $pass = '';          // пароль
    $name = 'mydb';      // имя базы данных
	
    $link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf8'");

    $query1 = "SELECT * FROM users LIMIT 4";
    $query2 = "SELECT * FROM users LIMIT 1,4";
    $query = "SELECT * FROM users ORDER BY salary LIMIT 3";
    $query4 = "SELECT * FROM users ORDER BY salary DESC LIMIT 3";
?>
