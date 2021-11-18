<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
</head>
<body>
    
<div>
    <?php
        error_reporting(E_ERROR | E_PARSE);
        include_once '../Controller/processar.php';
        foreach($_SESSION['tasks'] as $key => $value)
        {
            $indice = $key +1;
            echo "
                <br>
                <a class='item'>● $value</a>
                <br>
            ";
        }
            
    ?>
</div>


</body>
</html>