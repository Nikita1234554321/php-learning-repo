<?php
    $host = 'localhost'; // имя хоста
    $user = 'root';      // имя пользователя
    $pass = '';          // пароль
    $name = 'mydb';      // имя базы данных
	
    $link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf8'");

    $query = "INSERT INTO users ('name', age, salary) VALUES ('user7', 27, 300)";
    mysqli_query($link, $query) or die(mysqli_error($link));
?>
