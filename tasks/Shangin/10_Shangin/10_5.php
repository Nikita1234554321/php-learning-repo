<?php
    $dir = mkdir('dir');
?>
<br>
<?php
    $arr = file ('s.txt',FILE_IGNORE_NEW_LINES);
    for ($i=0;$i<8;$i++) {
        mkdir( $arr[$i] );
    }
?>
<br>
<?php
    rmdir('test');
?>
<br>
<?php
    rename('dir', 'test');
?>
