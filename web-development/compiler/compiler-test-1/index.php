<?php

if(isset($_POST['input'])){
    $input = $_POST['input'];
    // $file_name = $_POST['file_name'];
    // $file = $file_name."c";
    $file="test.cpp";
    file_put_contents($file, $input);
    putenv("PATH=C:\Program Files (x86)\Dev-PHP2");
    shell_exec("g++ test.cpp -o text.exe");
    $outut = shell_exec("$file");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">


    <title>Compiler</title>
</head>
<body>
    <div class="container mt-2">
        <form action="index.php" method="POST" class="row">
            <div class="input col-6 bg-light p-3">
                <h1 class="mb-4">Input</h1>
                <input type="text" name="file_name" placeholder="File Name" class="mt-3 mb-3 input-group-prepend pl-3" value="<?php echo $file_name;?>">
                <textarea name="input" class="form-control" value="<?php echo $input;?>"></textarea>
                <button class="btn btn-primary mt-3">Execute</button>
            </div>
            <div class="output col-6 bg-light p-3">
                <h1 class="mb-4">Output</h1>
                <textarea name="output" class="form-control" value="<?php echo $output;?>"></textarea>
            </div>
        </form>
    </div>
</body>
</html>