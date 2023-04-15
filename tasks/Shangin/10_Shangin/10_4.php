<?php
    rename('old.txt', 'new.txt');
?>
<br>
<?php
    rename('file.txt', 'dir/file.txt');
?>
<?php
    rename('file.txt','/dir2/file.txt');
?>
<?php 
    $a = ['1.txt','2.txt','3.txt'];
        for ($i=0;$i<3;$i++) {
            unlink($a[$i]);
        }
?>
<br>
<?php
    echo filesize('new.txt');
    echo filesize('new.txt') / 1024;
    echo filesize('new.txt') / (1024 * 1024);
    echo filesize('new.txt') / (1024 * 1024 * 1024);  
?>
<br>
<?php
    if (file_exists('file.txt')) {
        echo 'файл существует';
    } else {
        echo 'файла не существует';
    }
?>
<br>
<?php
    if (file_exists('test.txt')) {
        echo file_get_contents('test.txt');
    } else {
        echo 'файла не существует';
    }
?>
