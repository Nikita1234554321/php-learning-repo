<?php
	for ($i = 1; $i <= 5; $i++) {
		echo "<ul><li>$i</li></ul>";
	}
?>
<br>
<?php
	$arr = ['user1', 'user2', 'user3'];
    foreach ($arr as $elem){
        echo "<div><h2>$elem</h2><p>text</p></div>";
    }
?>
<br>
<?php
	$arr = [
		[
			'name' => 'user1',
			'age'  => 30,
		],
		[
			'name' => 'user2',
			'age'  => 31,
		],
		[
			'name' => 'user3',
			'age'  => 32,
		],
	];
    foreach ($arr as $elem){
        echo "<div><p>name: $elem[name]</p><p>age: $elem[age]</p></div>";
    }
?>
