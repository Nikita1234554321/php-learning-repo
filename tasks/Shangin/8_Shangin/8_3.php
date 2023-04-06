<form action="" method="GET">
	<input name="Фамилия" placeholder="Фамилия">
    <input name="Имя" placeholder="Имя">
    <input name="Отчество" placeholder="Отчество">
	<input type="submit">
</form>

<?php
	if (!empty($_GET)) {
		echo $_GET['Фамилия'] . $_GET['Имя'] . $_GET['Отчество'];
	}
?>