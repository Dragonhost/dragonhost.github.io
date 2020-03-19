<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="This is calculator app">
    <title>Calculator</title>
</head>
<body>
    <div class="box">
        <h1>Calculator</h1>
        <form method="GET" action="index.php">
            <div class="">
                <label class="">Enter the First Number </label>
                <input type="text"  class="" name="a" placeholder="Enter the value of a" value="<?php if($a!=0) echo $a; ?>"/>
            </div>
            <div class="">
                <label class="">Enter the Second Value </label>
                <input class="" type="text" name="b" placeholder="Enter the value of b" value="<?php if($b!=0) echo $b; ?>"/>
            </div>
            <div class="output">
                The result is : 
                <?php
                    
                    if($c==0)
                        echo "- No value -";
                    else
                        echo "<h1>".$c."</h1>";
                ?>
            </div>

            <button type="submit" class="" name="compute">Compute</button>
            
        </form>
    </div>
</body>
</html>