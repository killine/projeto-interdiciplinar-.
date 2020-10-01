<!DOCTYPE html>
<html lang="pt-br">

<?php

    include 'fix_cabecalho.php';

?>
 
<section>

    <div class="container">
        <div class="card">
            <div class="card-header">
            <h1>INICIAR UMA NOVA VENDA</h1>
            </div>
            <form action="data_nf.php" method="post">
                <ul class="disc">
                    <h2>>Ao clicar em "iniciar venda",
                    o sistema irá gerar uma nova nota
                    fiscal na tabela nota_fiscal sem 
                    o valor total.</h2>
                </ul>
                <ul class="disc">
                    <h2>>Na próxima tela será solicitada
                    a data da NF.</h2>
                </ul>
                <ul class="disc">
                    <h2>>O valor total será atualizado após a 
                    inserção dos itens de nota fiscal.</h2>
                </ul>
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

<section id="home">
                <h1>OUTRAS OPÇÕES</h1>
                <div class="karol">
                    <div class="karoline">
                         <button style="background-color:#31112c;"><a href="index.html" style="color:#c3aed6;">sair</a></button>
                    </div>
                </div>

                    <div>
                        <a  href="form_produto.php" style="color:  #31112c;">
				        <img class="imagem2" src="img/2.png" >
				        <h3>Cadastrar produtos</h3>
                    </div>
                    <div>
                        <a  href="ver_nf.php" style="color:  #31112c;">
				        <img class="imagem2" src="img/4.png">
				        <h3>Ver notas emitidas</h3>
			        </div>
			        <div>
                        <a  href="mostrar_produtos.php" style="color:  #31112c;">
			        	<img class="imagem2" src="img/3.png">
				        <h3>Ver os produtos do mercadinho</h3>
			        </div>
			       
</section>
</body>
</html>