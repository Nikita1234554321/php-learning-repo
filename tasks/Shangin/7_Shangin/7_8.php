<?php
	$show = true;
    if ($show === true){
        echo "<div><p1>text1</p2><br><p2>text2</p2><br><p3>text3</p3></div>";
    }
?>
<br>
<?php
	$show = true;
    if ($show === true){
        echo "<div><p1>text+</p2><br><p2>text+</p2><br><p3>text+</p3></div>";
    } else {
        echo "<div><p1>text-</p2><br><p2>text-</p2><br><p3>text-</p3></div>";
    }
?>
<br>
<?php
	$show = true;
    if ($show == 2){
        echo "<div><p1>text1</p2><br><p2>text1</p2><br><p3>text1</p3></div>";
    } elseif ($show == 1){
        echo "<div><p1>text2</p2><br><p2>text2</p2><br><p3>text2</p3></div>";
    }   else {
        "<div><p1>text-</p2><br><p2>text-</p2><br><p3>text-</p3></div>";
    }
?>