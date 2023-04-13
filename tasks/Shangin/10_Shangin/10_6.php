<?php
    $a = scandir('dir'); 
    $a = array_diff(scandir('dir'),['..','.']);
    var_dump($a);
?>
<br>
