<?php
	if (empty($_GET)) {
?>
	<form action="" method="GET">
		<input name="Имя" placeholder="Имя">
		<input type="submit">
	</form>
<?php
	} else {
		echo "Приветствую вас," . $_GET['Имя'];
	}
?>