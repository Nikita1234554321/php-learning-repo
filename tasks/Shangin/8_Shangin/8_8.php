<form action="" method="GET">
	<input type="hidden" name="radio" value="0">
	<input type="radio"  name="radio" value="Муж">
	<input type="radio"  name="radio" value="Жен">

	<input type="submit">
</form>
<?php
	echo ($_GET['radio']); 
?>
<br>
<br>


<form action="" method="GET">
	<input type="radio" name="radio1" value="RU" <?php
		if (!empty($_GET['radio1']) and $_GET['radio1'] === 'RU') {
			echo 'checked';
		}
	?>>
	<input type="radio" name="radio1" value="ENG" <?php
		if (!empty($_GET['radio1']) and $_GET['radio1'] === 'ENG') {
			echo 'checked';
		}
	?>>
	<input type="radio" name="radio1" value="GER" <?php
		if (!empty($_GET['radio1']) and $_GET['radio1'] === 'GER') {
			echo 'checked';
		}
	?>>
	<input type="submit">
</form>
<?php
	echo ($_GET['radio1']); 
?>