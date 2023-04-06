<?php
	function func($num) {
		return $num * $num;
	}
	
	$result = func(3);
	echo $result; 
?>
<br>
<?php
	function func1($num) {
		return sqrt($num);
	}
	
	$result = func1(3) + func1(4);
	echo $result; 
?>
<br>
<?php
	function func2($num1, $num2) {
		if ($num1 > 0 and $num2 > 0) {
			return $num1 * $num2;
		} else {
			return $num1 - $num2;
		}
	}
	
	echo func2(3, 4);
?>