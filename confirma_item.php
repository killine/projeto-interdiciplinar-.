<!DOCTYPE html>
<html lang="pt-br">
<?php
include 'fix_cabecalho.php'
?>
<section>
    <div class="container">
        <div class="card2">
            <form method="post">

                        <?php
                        ;
                        include 'conecta.php';
                        echo"<br><hr>";
                        session_start();
                        $nf = $_SESSION['nf'];

                        $consulta = "SELECT * FROM itens_nf WHERE num_nf = '$nf'";

                        echo "<h2>NF: ".$nf ."</h2><hr>";
                        $total = 0;
                        foreach ($conexao -> query($consulta) as $linha){
                            
                            echo "<h2>Cod Produto: ".$linha['cod_produto'] ."<br></h2>";
                            echo "<h2>Qtde: ".$linha['qtde'] ."<br></h2>";
                            echo "<h2>Subtotal: R$ ".$linha['subtotal'] ."</h2>";
                            $total = $total + $linha['subtotal'];
                            echo "<hr>";
                        }
                        echo "<h2><b> Total da Nota R$ ".$total."</b></h2>";
                        ?>
                    

                        <div class="card2-header">
                        <h2>
                             O que deseja fazer?
                        </div>
                        

                
                        <h2 ><a href="seleciona_ultima_nf.php" style="color:  #31112c;">Inserir outro produto</a></h2>
                    <h2 ><a href="finalizar.php?total=<?php echo $total; ?>" style="color:  #31112c;">Finalizar nota fiscal</a></h2>
            </form>
        </div>
    </div>
</section>
</body>
</html>