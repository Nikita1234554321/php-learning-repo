<?php
    session_start();
	
    if (!empty($_GET)) {
        $_SESSION = $_GET;
    }
?>

<?php
    if (!empty($_GET)) {
        $_SESSION['nums'] = $_GET;
    }
?>

<?php
    foreach ($_SESSION['nums'] as $elem){
        echo '<ul><li>$elem</li></ul>';
    }
?>

<form method="GET">
    <input name="Фамилия" type='text' placeholder='Фамилия'>
    <input name="Имя" type='text' placeholder='Имя'>
    <input name="Зарплата" type='text' placeholder='Зарплата'>
    <input name="Возраст" type='text' placeholder='Возраст'>
    <input type="submit">
</form>
