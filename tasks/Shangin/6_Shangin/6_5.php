<?php
	function isChetnei($arr) {
		foreach ($arr as $elem) {
			if ($elem % 2 === 0) {
				return true;
			} else {
                return false;
            }
		}
	}
    $arr = [1, 3, 5, 7];
    $arr2 = [1, 4, 5];
    $arr3 = [2, 4, 6];
    var_dump (isChetnei($arr));
    var_dump (isChetnei($arr2));
    var_dump (isChetnei($arr3));
?>
<br>
<?php
	function isNeChetnei($arr) {
		foreach ($arr as $elem) {
			if ($elem % 2 === 1) {
				return true;
			} else {
                return false;
            }
		}
	}
    $arr = [3, 9, 5, 7];
    $arr2 = [3, 7, 5];
    $arr3 = [2, 4, 6];
    var_dump (isNeChetnei($arr));
    var_dump (isNeChetnei($arr2));
    var_dump (isNeChetnei($arr3));
?>
<br>
<?php
	function same($arr) {
		foreach ($arr as $elem) {
			if ($elem == $elem) {
				return true;
			} else {
                return false;
            }
		}
	}
    $arr = [3, 3, 5, 7];

    var_dump (same($arr));

?>