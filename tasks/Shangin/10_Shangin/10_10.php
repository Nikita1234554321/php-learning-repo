<?php
    ob_start();
        include 'test.php'; 
    $res = ob_get_clean(); 
?>
<?php
    function getFile($name) {
        ob_start();
	    include $name; 
        return ob_get_clean(); 
    }
?>
<?php
    $res = getFile('test.php');
    echo 'index' . $res;
?>
