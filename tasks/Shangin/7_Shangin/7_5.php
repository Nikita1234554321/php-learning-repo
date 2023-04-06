<?php
	$arr = [
		['href'=>'page1.html', 'text'=>'text1'],
		['href'=>'page2.html', 'text'=>'text2'],
		['href'=>'page3.html', 'text'=>'text3'],
	];
    foreach ($arr as $elem){
        echo "<ul><li><a href=\"$elem[href]\">$elem[text]</a></li></ul><br>";
    }
?>
<br>
<?php
	$arr = [
		['value' => '1', 'text' => 'text1'],
		['value' => '2', 'text' => 'text2'],
		['value' => '3', 'text' => 'text3'],
	];
    foreach ($arr as $elem){
        echo "<select><option>\"$elem[value]\" $elem[text]</option></select><br>";
    }
?>