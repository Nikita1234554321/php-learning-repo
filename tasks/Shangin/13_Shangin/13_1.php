<?php
    $host = 'localhost'; // имя хоста
    $user = 'root';      // имя пользователя
    $pass = '';          // пароль
    $name = 'mydb';      // имя базы данных
    
    $link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf8'");

	$query = "SELECT * FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);


	foreach ($data as $elem): ?>
        <div>
            <h2><?= $elem['name'] ?></h2>
            <p><?= $elem['age'] . ' ' . 'years' ?></p>
            <b><?= $elem['salary'] .'$' ?></b>
        </div>
    <?php endforeach; 
    

    foreach ($data as $elem): ?>
        <table>
            <tr>
                <th><?= $elem['id'] ?></th>
                <th><?= $elem['name'] ?></th>
                <th><?= $elem['age'] . ' ' . 'years' ?></th>
                <th><?= $elem['salary'] .'$' ?></th>
            </tr>
        </table>
    <?php endforeach;
    

    foreach ($data as $elem): ?>
        <ul>
            <li><?= $elem['name'] ?></li>
    </ul>
    <?php endforeach; 
?>