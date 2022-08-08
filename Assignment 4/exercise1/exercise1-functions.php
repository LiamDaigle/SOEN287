<?php

    function uppercaseFirstandLast($s){
        if(gettype($s) == 'string'){

            $array = explode(" ",$s);
            $newStr = "";
            for($i = 0; $i < count($array); $i++){
                $current = $array[$i];
                $current[0] = strtoupper($current[0]);
                $current[strlen($current) - 1] = strtoupper($current[strlen($current) - 1]);
                $newStr .= $current . " ";
        }
            return $newStr;
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