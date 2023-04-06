<?php
if (isset($_REQUEST['num'])) {
    $num = $_REQUEST['num'];
    $arr = range(1, $num);
    $fak = array_product($arr);
    echo $fak;
}
?>
<form action="" method="post">
    <input type="text" name="num" placeholder=""><br><br>
    <input type="submit">
</form>
<br>


<?php
if (isset($_REQUEST['num'])) {
    $num = $_REQUEST['num'];
    $del = [];
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $del[] = $i;
        }
    }
    $str = implode(', ', $del);
    echo $str;
}
?>
<form action="" method="post">
    <input type="text" name="num" placeholder=""><br><br>
    <input type="submit">
</form>
<br>


<?php
function deliteli($num)
{
    $del = [];
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $del[] = $i;
        }
    }
    return $del;
}
if (isset($_REQUEST['a']) and isset($_REQUEST['b'])) {
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    $delA = deliteli($a);
    $delB = deliteli($b);
    $str = implode(', ', array_intersect($delA, $delB));
    echo $str;
}
?>
<form action="" method="post">
    <input type="text" name="a" placeholder=""><br><br>
    <input type="text" name="b" placeholder=""><br><br>
    <input type="submit">
</form>
<br>


<?php
if (isset($_REQUEST['a']) and isset($_REQUEST['b']) and $_REQUEST['c']) {
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    $c = $_REQUEST['c'];
    $d = $b * $b - 4 * $a * $c;
    $x1 = round((-$b + sqrt($d)) / (2 * $a), 2);
    $x2 = round((-$b - sqrt($d)) / (2 * $a), 2);
    echo 'x1 = '.$x1.', x2 = '.$x2;
}
?>
 
<form action="" method="post">
    <input type="text" name="a" placeholder=""><br><br>
    <input type="text" name="b" placeholder=""><br><br>
    <input type="text" name="c" placeholder=""><br><br>
    <input type="submit">
</form>
<br>


<?php
if (isset($_REQUEST['a']) and isset($_REQUEST['b']) and $_REQUEST['c']) {
    $arr[] = $_REQUEST['a'] * $_REQUEST['a'];
    $arr[] = $_REQUEST['b'] * $_REQUEST['b'];
    $arr[] = $_REQUEST['c'] * $_REQUEST['c'];
    sort($arr);
    if ($arr[2] == $arr[1] + $arr[0]) {
        echo 'True';
    } else {
        echo 'False';
    }
}
?>
 
<form action="" method="post">
    <input type="text" name="a" placeholder=""><br><br>
    <input type="text" name="b" placeholder=""><br><br>
    <input type="text" name="c" placeholder=""><br><br>
    <input type="submit">
</form>
<br>


<?php
if (!empty($_REQUEST['text'])) {
    $str = $_REQUEST['text'];
    $strLen = strlen($str);
    $wordsCount = count(explode(' ', $str));
    $spaceCount = $wordsCount - 1;
    echo 'В тексте '.$wordsCount.' слов, '.$strLen.' символов, '.$spaceCount . ' пробелов.';
}
?>
<form action="" method="get">
    <textarea name="text" placeholder="">Привет</textarea>
    <input type="submit">
</form>
<br>


<?php
mb_internal_encoding("UTF-8");
if (!empty($_REQUEST['text'])) {
    $str = $_REQUEST['text'];
    $strLen = mb_strlen($str);
    $valuesCount = array_count_values(str_split($str));
    foreach ($valuesCount as $key => $item) {
        $x = 100 / $strLen * $item;
        echo '"'.$key.'" - "'.round($x, 2).'"<br>';
    }
}
?>
<form action="" method="post">
    <textarea name="text" placeholder="">Привет</textarea>
    <input type="submit">
</form>
<br>


<?php
$month = [1 => 'январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
$week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
if (isset($_REQUEST)) {
    $day = $_REQUEST['day'];
    $mon = array_search($_REQUEST['month'], $month);
    $year = $_REQUEST['year'];
    $dayOfWeek = $week[date('w', mktime(0, 0, 0, $mon, $day, $year))];
    echo $dayOfWeek;
}
?>
<form action="" method="post">
    <select name="day">
        <?php for ($i = 1; $i <= 31; $i++): ?>
            <option><?=$i;?></option>
        <?php endfor;?>
    </select>
    <select name="month">
        <?php foreach ($month as $item): ?>
            <option><?=$item;?></option>
        <?php endforeach;?>
    </select>
    <select name="year">
        <?php for ($i = 1990; $i <= 2025; $i++): ?>
            <option><?=$i;?></option>
        <?php endfor;?>
    </select>
    <input type="submit">
</form>
<br>


<?php
$goroskop = [
    'Овен' => ['10.10' => 'овен 10.10', '11.10' => 'овен 11.10'],
    'Телец' => ['10.10' => 'телец 10.10', '11.10' => 'телец 11.10'],
    'Близнецы' => ['10.10' => 'близнецы 10.11', '11.10' => 'близнецы 11.10'],
    'Рак' => ['10.10' => 'рак 10.10', '11.10' => 'рак 11.10'],
    'Лев' => ['10.10' => 'лев 10.10', '11.10' => 'лев 11.10'],
    'Дева' => ['10.10' => 'дева 10.10', '11.10' => 'дева 11.10'],
    'Весы' => ['10.10' => 'весы 10.10', '11.10' => 'весы 11.10'],
    'Скорпион' => ['10.10' => 'скорпион 10.10', '11.10' => 'скорпион 11.10'],
    'Стрелец' => ['10.10' => 'стрелец 10.10', '11.10' => 'стрелец 11.10'],
    'Козерог' => ['10.10' => 'козерог 10.10', '11.10' => 'козерог 11.10'],
    'Водолей' => ['10.10' => 'водолей 10.10', '11.10' => 'водолей 11.10'],
    'Рыбы' => ['10.10' => 'рыбы 10.10', '11.10' => 'рыбы 11.10']
];
if (isset($_REQUEST['date'])) {
    $date = explode('.', $_REQUEST['date']);
    $dateStr = $date[1].$date[0];
    $znak = '';
    if ($dateStr >= '0321' and $dateStr <= '0419') {
        $znak = 'Овен';
    }
    if ($dateStr >= '0420' and $dateStr <= '0520') {
        $znak = 'Телец';
    }
    if ($dateStr >= '0521' and $dateStr <= '0620') {
        $znak = 'Близнецы';
    }
    if ($dateStr >= '0621' and $dateStr <= '0722') {
        $znak = 'Рак';
    }
    if ($dateStr >= '0723' and $dateStr <= '0822') {
        $znak = 'Лев';
    }
    if ($dateStr >= '0823' and $dateStr <= '0922') {
        $znak = 'Дева';
    }
    if ($dateStr >= '0923' and $dateStr <= '1022') {
        $znak = 'Весы';
    }
    if ($dateStr >= '1023' and $dateStr <= '1121') {
        $znak = 'Скорпион';
    }
    if ($dateStr >= '1122' and $dateStr <= '1221') {
        $znak = 'Стрелец';
    }
    if (($dateStr >= '1222' and $dateStr <= '1231') or ($dateStr >= '0101' and $dateStr <= '0119')) {
        $znak = 'Козерог';
    }
    if ($dateStr >= '0120' and $dateStr <= '0218') {
        $znak = 'Водолей';
    }
    if ($dateStr >= '0219' and $dateStr <= '0320') {
        $znak = 'Рыбы';
    }
    $now = date('Y-m-d', time());
    $now = date_create($now);
    date_modify($now, '1 day');
    $nextDay = date_format($now, 'd.m');
    echo $goroskop[$znak][$nextDay];
}
?>
<form action="" method="get">
    <input type="text" name="date" placeholder="">
    <input type="submit">
</form>