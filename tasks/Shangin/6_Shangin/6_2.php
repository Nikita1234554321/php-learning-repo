<?php
	function func($num) {
		echo $num * $num * $num;
	}
	func(2); 
?>
<br>
<?php
	function func1($num) {
		if ($num > 0){
            echo '+++';
        }   else '---';
	}
	func1(2); 
?>
<br>
<?php
	function func2($num1, $num2, $num3) {
		echo $num1 + $num2 + $num3;
	}
	func2(1, 2, 3); 
?>
<br>
<?php
    function func3($param1, $param2, $param3) {
        echo $param1 + $param2 + $param3;
    }
	$param1 = 1;
	$param2 = 2;
	$param3 = 3;
    func3($param1, $param2, $param3); 
?>