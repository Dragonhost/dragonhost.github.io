<?php
    include "code/logic.php";
    include "code/request.php";

    include "scripts/dbh.php";
    include "scripts/query.php";
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
                <form method="GET" action="index.php">
                    <div class="mb-2">
                        <label class="pr-5">Enter the First Number </label>
                        <input type="text"  class="form-control" name="a" placeholder="Enter the value of a" value="<?php if($a!=0) echo $a; ?>"/>
                    </div>
                    <div class="mb-2">
                        <label class="pr-5">Enter the Second Value </label>
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

                    <button type="submit" class="btn btn-primary" name="add">Add</button>
                    
                </form>
            </div>
            
        </div>
        <div class="data">
            <?php
            if(isset($_REQUEST['add'])){
                $table = '<table class="table">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">a</th>
                                <th scope="col">b</th>
                                <th scope="col">result</th>
                            </tr>';
               echo $table;
               while($row = mysqli_fetch_assoc($query3)){
                    echo '<tr>
                            <td scope="row">'.$row['id'].'</td>
                            <td scope="row">'.$row['a'].'</td>
                            <td scope="row">'.$row['b'].'</td>
                            <td scope="row">'.$row['result'].'</td>
                          </tr>';
                }
                echo '</table>';
            }
            ?>
        </div>
    </body>
</html>



