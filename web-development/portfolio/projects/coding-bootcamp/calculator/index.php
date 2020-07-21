<?php
    
    include "code/logic.php";
    include "code/request.php";
?>
<html>
    <head>
        <title>Calculator</title>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <div class="container">
            <div class="bg-warning p-5 border border-secondary">
                <h1>Calculator</h1>
                <form method="get" action="index.php">
                    <div class="mb-2">
                        <label class="pr-5">Enter the value of A </label>
                        <input type="text"  class="form-control" name="a" placeholder="Enter the value of a" value="<?php if($a!=0) echo $a; ?>"/>
                    </div>
                    <div class="mb-2">
                        <label class="pr-5">Enter the value of B </label>
                        <input class="form-control mb-3" type="text" name="b" placeholder="Enter the value of b" value="<?php if($b!=0) echo $b; ?>"/>
                    </div>
                    <div class="bg-white p-3 mb-4 border border-danger rounded">
                        The result of addition is : 
                        <?php
                            
                            if($c==0)
                                echo "- No value -";
                            else
                                echo "<h1>".$c."</h1>";
                        ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                    
                </form>
            </div>
            
        </div>
    </body>
</html>



