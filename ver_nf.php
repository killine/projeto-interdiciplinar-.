<!DOCTYPE html>
<html lang="pt-br">

<section>
<?php

include 'fix_cabecalho.php';
?>
    <div class="container">
        <div class="card2">
        <form>
        <div class="card">
                            <div class="card-header">
                         <h1>Veja as Notas Fiscais </h1>
                        </div>

<?php
    include 'conecta.php';

    $consulta = "SELECT * FROM nota_fiscal";


    foreach ($conexao -> query($consulta) as $linha){
            echo "<h3>NF: ".$linha['nf'] ."<br></h3>";
            echo "<h2>Data: ".$linha['data'] ."<br></h2>";
            echo "<h2>Valor total R$ : ".$linha['valor_total'] ."<br></h2>";
            


            $nota = $linha['nf'];
            $consulta2 = "SELECT * FROM itens_nf WHERE num_nf = '$nota'";
            foreach ($conexao -> query($consulta2) as $linha2) {
                echo "<h2>ID: ".$linha2['id'] ."</h2>";
                echo "<h2>Cod_ Produto: ".$linha2['cod_produto'] ."</h2>";
                $codigo = $linha2['cod_produto'];
                $consulta3 = "SELECT * FROM  produtos WHERE id = '$codigo'";
                foreach ($conexao -> query($consulta3) as $linha3) {
                    
                    echo "<h2>Valor Unit R$: ".$linha3['preco'] ."</h2>";

                }
                
                echo "<h2>Qtde: ".$linha2['qtde'] ."</h2>";
                echo "<h2>Sub Total R$: ".$linha2['subtotal'] ."<br></h2>";
                echo "<h2>Nome: ".$linha3 ['nome'] ."</h2>";

                }  
                echo "<hr>";        
    }
    echo "<br>";

?>
                <div class="karol">
                    <div class="karoline">
                         <button style="background-color:#31112c;"><a href="index.php" style="color:#c3aed6;">Voltar ao inicio</a></button>
                    </div>
                </div>


            </form>
         </div>
    </div>
</section>
</head>
<body>