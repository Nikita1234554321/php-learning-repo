<?php
	function getSqrtSum($arr) {
		$sqrt = 0;
		
		foreach ($arr as $elem) {
			$sqrt = sqrt($elem);
		}
		
		return $sqrt;
	}
	
	$arr1 = [1, 2, 3, 4];
	$arr2 = [5, 6, 7, 8];
	
	echo getSqrtSum($arr1);
	echo getSqrtSum($arr2);
?>
<br>
<?php
    function getDivisors($a){
    $arr = [];
    
    for ($i=1; $i < $a; $i++) {
        if ($a % $i == 0) {
            $arr [] = $i;
        }
    }
    return $arr;
    }
    $a = 16;
    var_dump(getDivisors($a));
?>  