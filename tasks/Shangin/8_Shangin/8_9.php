<form action="" method="GET">
	<select name="test">
		<option>Россия</option>
		<option>Украина</option>
		<option>Америка</option>
	</select>
	<input type="submit">
</form>
<?php
	echo($_GET['test']); 
?>
<br>


<form action="" method="GET">
	<select name="test1">
		<option>Русский</option>
		<option>Английский</option>
		<option>Немецкий</option>
	</select>
	<input type="submit">
</form>
<?php
	echo($_GET['test1']); 
?>
<br>


<form action="" method="GET">
	<select name="test2">
		<option value="1" <?php
			if (!empty($_GET['test2']) and $_GET['test2'] === '1') {
				echo 'selected';
			}
		?>>item1</option>
		<option value="2" <?php
			if (!empty($_GET['test2']) and $_GET['test2'] === '2') {
				echo 'selected';
			}
		?>>item2</option>
		<option value="3" <?php
			if (!empty($_GET['test2']) and $_GET['test2'] === '3') {
				echo 'selected';
			}
		?>>item3</option>
	</select>
	<input type="submit">
</form>
<?php
	echo($_GET['test2']); 
?>