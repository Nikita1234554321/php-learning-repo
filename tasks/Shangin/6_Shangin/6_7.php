<?php

    function Years(){
    $years = range(1, 2030);
    $thirteens = [];
        foreach($years as $year){
            if(getDigitsSum($year) === 13){
               $thirteens[] = $year;
            }                                 
        }
        for($i = 0; $i < count($thirteens); $i++){
            if($i == 30){
                echo '<br>';
        }
            if($i == 60){
                echo '<br>';
        }
            if($i == 86){
                echo '<br>';
        }
            if($i == 114){
                echo '<br>';
        }
            if($i == 140){
                echo '<br>';
        }
            echo $thirteens[$i]. ', ';

        }                                                    
    }
        Years();
        function getDigitsSum($num) {
        return array_sum(str_split($num));
        }

?>

