<?php
    // This page is for my code logic
    
    $c = 0;

    function add($a,$b){
        $c = $a + $b;
        return $c;
    }

    function sub($a,$b){
        $c = $a - $b;
        return $c;
    }

    function mul($a,$b){
        $c = $a * $b;
        return $c;
    }

    if(isset($op)){
        if($op == 'add'){
            $c = add($a, $b);
        }
        elseif($op == 'sub'){
            $c = sub($a, $b);
        }
        elseif($op == 'mul '){
            $c = mul($a, $b);
        }
    }


?>