<?php
    if (empty($_COOKIE['time'])) {
        setcookie('time', time());
}
 
    echo time() - $_COOKIE['time'];
?>
