<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "compra";

$conexao =  new MySQLi ("$host","$usuario", "$senha", "$banco");

if ($conexao -> connect_error){
    echo "Erro de conexão!";
}

else{
    
}


?>