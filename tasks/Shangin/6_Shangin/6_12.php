<?php
    function dividers($n) {
    $r = [1];
        for ($t = 2; $t * $t < $n; ++$t) {
            if ($n % $t == 0) {
            $r[] = $t;
            $r[] = $n / $t;
            }
        }
        if ($t * $t == $n) { $r[] = $t; }
        return $r;
    }

    $d = [];
    for ($i = 1; $i <= 1000; ++$i) { $d[$i] = array_sum(dividers($i)); }
    for ($i = 1; $i < 1000; ++$i) {
    for ($j = $i + 1; $j <= 1000; ++$j) {
    if ($d[$i] == $j && $d[$j] == $i) {
    echo $i, ' ', $j, "\n";
    }
    }
    }
?>
<br>
<?php
    $num = 999999;  
 
    function happy($num){
 
    $count=0;
 
    for($i=1;$i<=$num;$i++){
   
    $str =(string)$i;
    if(strlen($str)<6){
    for($j=strlen($str);$j<6;$j++){  
    $str='0'.$str;  
    }
    }
    $arr = $str;
    If($arr[0]+$arr[1]+$arr[2] == $arr[3]+$arr[4]+$arr[5]){

    $count++; echo 'Билет номер: '.$str.'<br>'; }
     }

    echo 'Количество счсатливых билетов :'.$count;

    }
        echo happy($num);
?>
<br>
<?php
    function getDivisors($num)
    {
        $arr = [];
        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                $arr[] = $i;
            }
        }
        return $arr;
    }
    function getCommonDivisors($a, $b)
    {
        $divisorsA = getDivisors($a);
        $divisorsB = getDivisors($b);
        return array_intersect($divisorsA, $divisorsB);
    }
    var_dump (getCommonDivisors (4, 6));
?>
<br>
