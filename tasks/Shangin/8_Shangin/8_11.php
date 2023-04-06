<?php
echo $_GET['num'].'<br>';

echo '<a href="?num=1">par 1</a>'.'<br>';
echo '<a href="?num=2">par 2</a>'.'<br>';
echo '<a href="?num=3">par3 </a>'.'<br>';
?>
<br>
<?php
echo $_GET['num'].'<br>';

for($i = 1; $i <= 10; $i++){
echo "<a href=\"?num=$i\">link $i</a><br>";
}
?>
<br>
<?php
    $arr = ['a', 'b', 'c', 'd', 'e'];

    if(isset($_GET['num']) && isset($arr[$_GET['num']])){
    echo $arr[$_GET['num']].'<br>';
    }
    echo "<a href=\"?num=0\">link 0</a><br>";
    echo "<a href=\"?num=1\">link 1</a><br>";
    echo "<a href=\"?num=2\">link 2</a><br>";
    echo "<a href=\"?num=3\">link 3</a><br>";
    echo "<a href=\"?num=4\">link 4</a><br>";
?>