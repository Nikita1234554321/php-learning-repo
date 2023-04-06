<form action="" method="GET">
	<input
		name="Город и страна"
        placeholder = "Город и страна"
		value="<?php if (isset($_GET['Город и страна'])) echo $_GET['Город и страна'] ?>"
	>
	<input type="submit">
</form>
<br>


<form action="" method="get">
    <input type="text" name="year" placeholder="Год">
    <input type="submit">
</form>
<?php
if (isset($_REQUEST['year'])) {
    $year = $_REQUEST['year'];
    if (($year % 4 == 0 and $year % 100 != 0) or $year % 400 == 0) {
        echo $year . ' год високосный';
    } else {
        echo $year . ' год невисокосный';
    }
}
?>

