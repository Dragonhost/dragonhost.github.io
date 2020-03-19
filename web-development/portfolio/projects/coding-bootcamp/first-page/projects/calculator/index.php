<?php
    
    include "code/request.php";
    include "code/logic.php";

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
                        <label class="pr-5">Enter the First number </label>
                        <input type="text"  class="form-control" name="a" placeholder="Enter the value of a" value="<?php if(!empty($a)) echo $a; ?>"/>
                    </div>
                    <div class="mb-2">
                        <label class="pr-5">Enter the Second number</label>
                        <input class="form-control mb-3" type="text" name="b" placeholder="Enter the value of b" value="<?php if(!empty($a)) echo $b; ?>"/>
                    </div>
                    <div class="bg-white p-3 mb-4 border border-danger rounded">
                        The result is : 
                        <?php
                            
                            if($c==0)
                                echo "";
                            else
                                echo "<h1>".$c."</h1>";
                        ?>
                    </div>
                    <select name="operations" class="form-control mb-3">
                        <option value="operation" <?php if(!empty($op) && $op == 'operation') echo 'selected'?>>Operation</option>
                        <option value="add" <?php if(!empty($op) && $op == 'add') echo 'selected'?>>Addition</option>
                        <option value="sub" <?php if(!empty($op) && $op == 'sub') echo 'selected'?>>Subtraction</option>
                        <option value="mul" <?php if(!empty($op) && $op == 'mul') echo 'selected'?>>Multipication</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Compute</button>
                </form>
            </div>
            
        </div>
    </body>
</html>



