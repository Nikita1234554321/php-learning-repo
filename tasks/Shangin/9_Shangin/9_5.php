<?php
    session_start();
	
    if (!empty($_GET)) {
    $_SESSION['Фамилия'] = $_GET['Фамилия'];
    $_SESSION['Имя'] = $_GET['Имя'];
    $_SESSION['Возраст'] = $_GET['Возраст'];
    }
?>

<?php
    if (!empty($_SESSION)) {
        echo $_SESSION['Фамилия'] . ' ' . $_SESSION['Имя'] . ' ' . $_SESSION['Возраст'];
    }
?>


<form method="GET">
    <input name="Фамилия" type='text' placeholder='Фамилия'>
    <input name="Имя" type='text' placeholder='Имя'>
    <input name="Возраст" type='text' placeholder='Возраст'>
    <input type="submit">
</form>
