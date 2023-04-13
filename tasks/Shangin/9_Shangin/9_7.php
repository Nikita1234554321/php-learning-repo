<?php
	setcookie('test', 'abcde');
?>
<?php
	echo $_COOKIE['test']; // выведет 'abcde'
?>