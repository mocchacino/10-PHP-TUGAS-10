<?php
    $arr = array(1,3,8,2,5,7,4,0);

    print("Sebelum Di Sorting :<br>");
    print_r($arr);

    $arr = bubble_sort($arr);
    print("<br> Setelah Disorting (Buble Sort) :<br>");
    print_r($arr);

    function bubble_sort($arr) {
        $len = count($arr) -1;
        
        foreach(range(0, $len) as $i){
            
            foreach(range(0, $len-1) as $j){
                $k = $j + 1;
                if($arr[$j] > $arr[$k]){
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$k];
                    $arr[$k] = $temp;
                    
                }
            }
        }
        return $arr;
        
    }

    
?>