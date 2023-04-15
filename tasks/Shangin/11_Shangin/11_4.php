<?php
    $host = 'localhost'; // имя хоста
    $user = 'root';      // имя пользователя
    $pass = '';          // пароль
    $name = 'mydb';      // имя базы данных
	
    $link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf8'");

    $query1 = "SELECT * FROM users WHERE age>25 AND age<=28";
    $query2 = "SELECT * FROM users WHERE 'name'='user1'";
    $query3 = "SELECT * FROM users WHERE 'name'='user1'" and 'user2';
    $query4 = "SELECT * FROM users WHERE 'name'!='user3'";
    $query5 = "SELECT * FROM users WHERE age=27 or salary=1000";
    $query6 = "SELECT * FROM users WHERE age=27 or salary!=400";
    $query7 = "SELECT * FROM users WHERE (age>=23 AND age<27) or salary=1000";
    $query8 = "SELECT * FROM users WHERE (age>=23 AND age<=27) or (salary >= 400 AND salary<=1000)";

    
?>
