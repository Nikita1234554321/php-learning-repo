<form action="8_2.php" method="GET">
	<input name="num1" placeholder="num1">
    <input name="num2" placeholder="num2">
	<input name="num3" placeholder="num3">
	<input type="submit">
</form>
<?php
    var_dump ($_GET['num1'] + $_GET['num2'] + $_GET['num3']);
?>
<br>

<form action="8_2.php" method="POST">
	<input name="имя" placeholder="имя">
    <input name="возраст" placeholder="возраст">
	<input type="submit">
</form>
<?php
    var_dump ($_POST['имя'] . $_POST['возраст']);
?>
<br>

<form action="8_2.php" method="POST">
	<input type="password" name="pass" placeholder="пароль">
	<input type="submit">
</form>
<?php
    if ($_POST["pass"] == 12345){
        echo "пароль верный";
    }   else {
        echo "пароль неверный";
    }
?>