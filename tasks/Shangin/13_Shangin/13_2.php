<?php
    $host = 'localhost'; // имя хоста
    $user = 'root';      // имя пользователя
    $pass = '';          // пароль
    $name = 'mydb';      // имя базы данных
    
    $link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf8'");

    if (!empty($_POST)) {
        $name = $_POST['name'];
	$age = $_POST['age'];
	$salary = $_POST['salary'];
    }
        
    $query = "INSERT INTO users SET name='$name', age='$age', salary='$salary'";
    mysqli_query($link, $query) or die(mysqli_error($link));
?>

<form action="" method="POST">
    <input name="name" placeholder='name'>
    <input name="age" placeholder='age'>
    <input name="salary" placeholder='salary'>
    <input type="submit">
</form>
