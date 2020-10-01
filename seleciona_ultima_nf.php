<?php

    include 'conecta.php';
   // echo "<br><hr>";

    $consulta = "SELECT MAX(nf) as ultima FROM nota_fiscal";
    $consulta = $conexao->query ($consulta);
    $linha = $consulta-> fetch_assoc();
    $ultimo = $linha ['ultima'];
    //echo "Nota fiscal: ".$ultimo ."<br>";
   // echo "<hr>";

    session_start();
    $_SESSION['nf'] = $ultimo;

?>
<!DOCTYPE html>
<html lang="pt-br">
<?php

    include 'fix_cabecalho.php';

?>
<section>
    <div class="container">
        <div class="card2">
            
         <form action="insere_item.php?nf='<?php echo $ultimo;?>'" method="post">
         <div class="card2-header">
            <h2>NF: <input type="text" name="nf" value="<?php echo $ultimo;?>">
             <br></h2>
            </div>
            <h2>
            Qtde: <input type="text" name="qtde">
            </h2>
             
            <h2>
                Produto:
                <select name="produto_opcao" id="produto_opcao">
                <?php

                    $consulta = "SELECT * FROM produtos";
                    foreach ($conexao -> query ($consulta) as $linha){
                ?>
                        <option value="<?php echo $linha ['id'];?>"><?php echo $linha ['nome'];?></option>
                <?php
                    }
                ?>
                </select>
            </h2>
            
            <hr>
        <div class="karol">
            <div class="karoline">
              <input class="btn " type="submit" value="Adicionar">
            </div>
        </div>
          
         </form>
         </div>
    </div>
</section>
</body>
</html>