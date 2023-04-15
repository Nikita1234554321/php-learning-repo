<?php
    session_start();
	
    if (!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 1;
    } else {
        $_SESSION['counter']++;
    }
	
    echo $_SESSION['counter'];
?>
<?php
    if ($_SESSION['counter'] >= 10){
        unset($_SESSION['counter']);
    }
?>

<a href='logout.php'>Завершить сессию</a>
