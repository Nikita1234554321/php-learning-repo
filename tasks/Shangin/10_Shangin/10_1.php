<?php
	$file1 = file_get_contents('1.txt');
    $file2 = file_get_contents('2.txt');
    echo ($file1 + $file2);
?>
<br>
<?php
    $arr = [2, 4, 5];
    $arrsum = array_sum($arr);
	$sum = file_put_contents('sum.txt', $arrsum);
    echo file_get_contents('sum.txt');
?>
<br>
<?php 
    $t = file_get_contents('kvadrat.txt');
    echo $t . "<br>";
    $b=pow($t,2);
    echo $b ."<br>";
    file_put_contents("tekvadratst.txt",$b);
?>
<br>
<?php 
$t = file_get_contents('count.txt');
echo $t + 1;
file_put_contents("count.txt",$t=$t+1);
?>
<br>
