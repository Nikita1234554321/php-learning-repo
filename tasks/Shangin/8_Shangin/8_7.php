<form action="" method="GET">
    <input type="checkbox" name="flag">
    <input name="text">
    <input type="submit">
</form>
<?php
    if (!empty($_GET)) { 
        if (isset($_GET['flag'])) { 
	    echo 'Здравствуйте пользователь';
        } else {
	    echo 'До свидания пользователь';
        }
    }
?>

<br>
<br>
<br>
<form action="" method="GET">
    <input type="hidden" name="flag" value="0">
    <input type="checkbox" name="flag" value="1">
    <input type="submit">
</form>
<?php
    echo "Если вам есть 18 нажмите флашок" . '<br>';
    if (!empty($_GET)) {
        if ($_GET['flag'] === '1') {
	    echo 'Вы вошли';
        } else {
	    echo 'Вы не вошли';
        }
    }
?>
<br>
