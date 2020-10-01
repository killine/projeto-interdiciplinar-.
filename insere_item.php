 <!DOCTYPE html>
 <html lang="pt-br">
 <?php

    include 'fix_cabecalho.php';

?>
<?php

    include 'conecta.php';
    echo "<br>";

    session_start();
    $nf = $_SESSION['nf'];
    echo "<h3><b>Numero da NF: " . $nf . "</b></h3><br>";
    $id_prod = $_POST['produto_opcao'];
    $qtde_prod = $_POST['qtde'];

    $consulta = "SELECT preco,nome FROM produtos WHERE id = '$id_prod'";
    $consulta = $conexao->query($consulta);
    $linha = $consulta->fetch_assoc();
    //print_r($linha);
    $preco = $linha['preco'];
    $nome = $linha['nome'];

    $subtotal = $preco * $qtde_prod;
?>
<section>
    <div class="container">
        <div class="card2">
                <form action="insere_item_nf.php" method="POST">
                    <div class="card2-header">
                    <h2>
                        ID produto: <input type="text" name="id_prod" value="<?php echo $id_prod; ?>"
                        readonly="readonly">
                    </h2>
                    </div>
                    <div class="card2-header">
                        <h2>Produto: <input type="text" name="nome_prod" value="<?php echo $nome; ?>"
                        readonly="readonly">
                        </h2>
                    </div>
                    <div class="card2-header">
                    <h2>
                        Valor unit: <input type="text" name="valor_unit" value="<?php echo $preco; ?>"
                        readonly="readonly">
                    
                    </h2>
                    </div>
                    <div class="card2-header">
                        <h2>Qtde: <input type="text" name="qtde" value="<?php echo $qtde_prod; ?>"
                        readonly="readonly">
                        </h2>
                    </div>
                    <div class="card2-header">
                    <h2>
                        Subtotal: <input type="text" name="subtotal" value="<?php echo $subtotal; ?>"
                        readonly="readonly">
                    </h2>
                    </div>
                    <div class="karol">
                        <div class="karoline">
                        <input class="btn " type="submit" value="Adicionar produto">
                        </div>
                    </div>

                </form>
        </div>
    </div>
</section>                
 </body>
 </html>