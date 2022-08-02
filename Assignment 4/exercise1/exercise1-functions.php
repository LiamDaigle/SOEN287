<?php

    function uppercaseFirstandLast($s){
        if(gettype($s) == 'string'){
            $s[0] = strtoupper($s[0]);
            $s[strlen($s) - 1] = strtoupper($s[strlen($s) - 1]);
            return $s;
        }
        return false;
    }
    function findAverage_and_Median($array){
        $array = explode(',',$array[0]);
        if(gettype($array) == 'array'){
            $sum = 0;
            foreach($array as $v){
                if(!is_numeric($v) )
                    continue;
                $sum += $v;
            }
            $average = $sum / count($array);
            
            sort($array);

            $middle = count($array)/2;
            if(gettype($middle) == 'float')
                $middle = round($middle);
            $median = $array[$middle];
            
            $sumMedian = [$average,$median];
            return $sumMedian;
        }
        return false;
    }
?>