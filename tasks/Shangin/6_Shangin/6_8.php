<?php

$a = 30;
$res = [];
for ($i = 1; $i <= $a; $i++) {
    if ($a % $i == 0) {
        $res[] = $i;
    }
}
var_dump(count($res));

?>
