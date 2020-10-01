<?php
include 'conecta.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<?php

    include 'fix_cabecalho.php';

?>
<section>
    <div class="container">
        <div class="card">
            <div class="card-header">
            <h1>Insira a data da venda</h1>
            </div>
    <form action="gera_nf.php" method="post">

       <h2> DATA: <input type="date" name="data"></h2>
        <hr>
        <div class="karol">
            <div class="karoline">
              <input class="btn " type="submit" value="Iniciar Venda">
            </div>
        </div>
    
    </form>
        </div>
    </div>
</section>

    
</body>
</html>