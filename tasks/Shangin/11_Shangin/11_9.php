<?php
    $host = 'localhost'; // имя хоста
    $user = 'root';      // имя пользователя
    $pass = '';          // пароль
    $name = 'mydb';      // имя базы данных
	
    $link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf8'");

    $query1 = "SELECT * FROM users ORDER BY salary";
    $query2 = "SELECT * FROM users ORDER BY salary DESC";
    $query3 = "SELECT * FROM users ORDER BY 'name' DESC";
    $query4 = "SELECT * FROM users WHERE salary=500 ORDER BY age";
    $query = "SELECT * FROM users ORDER BY 'name', salary";
?>
