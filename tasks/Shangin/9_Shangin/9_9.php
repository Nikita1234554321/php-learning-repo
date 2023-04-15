<?php
    setcookie('test1', 'a', time() + 60 * 60 * 24 * 31);

    setcookie('test2', 'ab', time() + 60 * 60 * 24 * 365);

    setcookie('test3', 'abc', time() + 60 * 60 * 24 * 3650);
    
    echo $_COOKIE['test1'] . '<br>';
    echo $_COOKIE['test2'] . '<br>';
    echo $_COOKIE['test3'] . '<br>';
?>
