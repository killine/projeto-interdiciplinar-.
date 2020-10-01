<?php

    session_start();
    if ((!isset($_SESSION['nome']) == true) && (!isset($_SESSION['senha']) == true)){
       header('Location: index.html');
    }
    


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Comprinhas</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">


    <script type="text/javascript" src="bootstrap.bundle.js"></script>
    <script type="text/javascript" src="bootstrap.js"></script>

</head>
<body style="background: linear-gradient(#e8e8e8, #f4f4f4);">

    <nav class="navbar navbar-dark" style="background-color:#31112c;">
        
            <a class="navbar-brand centro" href="index.php">
            <h1>Entre na Comprinhas</h1>

        </a>
    </nav>
    <div class="karol">
                    <div class="karoline">
                    <button style="background-color:#31112c;"><a href="index.php" style="color:#c3aed6;" class="btn ">entrar</a></button>
                  
                    </div>
                </div>

   

    
</body>
</html>