<?php
	function func($arr) {
		foreach ($arr as $elem) {
			if (is_array($elem)) {
				func($elem);
			} else {
				echo $elem;
			}
		}
	}
	
	func([1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]]);
?>
<br>
<?php
	function func2($arr) {
		$sum = 0;
		
		foreach ($arr as $elem) {
			if (is_array($elem)) {
				$sum += func2($elem);
			} else {
				$sum += $elem;
			}
		}
		
		return $sum;
	}
	
	var_dump(func2([1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]]));
?>
<br>
<?php
	function func3($arr) {
		$sum = '';
		
		foreach ($arr as $elem) {
			if (is_array($elem)) {
				$sum .= func3($elem);
			} else {
				$sum .= $elem;
			}
		}
		
		return $sum;
	}
	
	var_dump(func3(['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 'k']]]]));
?>
<br>
<?php
	function func4($arr) {
		$length = count($arr);
		
		for ($i = 0; $i < $length; $i++) {
			if (is_array($arr[$i])) {
				$arr[$i] = func4($arr[$i]);
			} else {
				$arr[$i] = $arr[$i] * $arr[$i];
			}
		}
		
		return $arr;
	}
	
	var_dump(func4([1, [2, 7, 8], [3, 4], [5, [6, 7]]]));
?>
