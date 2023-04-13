<?php
    $path = '10_Shangin';
    var_dump(is_file($path));
    var_dump(is_dir($path));
?>
<br>
<?php
    $files = array_diff(scandir ('dir'),['..','.']);
    // var_dump($files);
    foreach ($files as $file) {
        if (is_dir ('dir/'.$file)) {
            echo $file,"<br>";
        }
    }
?>
<br>
<?php
    $files = array_diff(scandir ('dir'),['..','.']);
    // var_dump($files);
    foreach ($files as $file) {
        if (is_file ('dir/'.$file)) {
            echo $file,"<br>";
        }
    }
?>
<br>
