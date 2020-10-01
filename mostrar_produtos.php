<!DOCTYPE html>
<html lang="pt-br">
<?php

include 'fix_cabecalho.php';
?>
<section>
    <div class="container">
        <div class="card2">
        <form>
        <div class="card">
                            <div class="card-header">
                         <h1>Veja os Produtos  </h1>
                        </div>


                    <?php
                    
                            include 'conecta.php';
                    
                        
                            $consulta = "SELECT * FROM produtos";
                                        
                            foreach ($conexao -> query($consulta) as $linha) {

                            echo "<h3>ID : ".$linha['id'] ."<br></h3>";
                            echo "<h3>Nome: ".$linha['nome'] ."<br</h3>";
                            echo "<h3>Preço: R$ ".$linha['preco'] ."<br></h3>   <hr>";
                                            
                                                    
                            }
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
</body>
</html>