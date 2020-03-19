<?php
    /* This page is for holding request variable values */

    if(isset($_REQUEST['a']))
        $a = $_REQUEST['a'];
    else
        $a = 0;

    if(isset($_REQUEST['b']))
        $b = $_REQUEST['b'];
    else
        $b = 0;
    
    if($a!=0 || $b!=0)
    {
        $c = add($a,$b);
    }else
        $c = 0;
?>