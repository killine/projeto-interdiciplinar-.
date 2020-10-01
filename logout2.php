<?php

    session_start();

    unset(

        $_SESSION['nome'],
        $_SESSION['senha']
    

    );

    header ('Location: index.php');

?>