<?php
	for ($i = 1; $i <= 5; $i++) {
		echo "<ul><li>$i</li></ul>";
	}
?>
<br>
<?php
	$arr = ['text1', 'text2', 'text3'];
    foreach ($arr as $elem){
        echo "<select><option>$elem</option></select>";
    }
?>