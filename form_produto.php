<!DOCTYPE html>
<html lang="pt-br">
<?php

    include 'fix_cabecalho.php';

?>
<section>

<div class="container">
    <div class="card2">
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                        <div class="card">
                            <div class="card-header">
                         <h1>Cadastro dos Produtos</h1>
                        </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="col-sm-12">
                <div class="card-body card-block">
                <form action="inserir_produto.php" method="POST" enctype="multipart/form-data" class="form-horizontal" >

                        <div class="">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label"><h2>Nome</h2></label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="nome" placeholder="Nome" class="form-control">
                            </div>
                        </div>
                        <div class="">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label"><h2>Preço</h2></label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="preco" placeholder="Preco" class="form-control">
                            </div>
                        </div>
                
                                
                                    
                            <div class="karol">
                                <div class="karoline">
                                <input  style="color:  #31112c;" class="btn " type="submit" value="Cadastrar">
                        </div>
                </div>
                            
                        </div>
                        <div class="karol">
                    <div class="karoline">
                         <button style="background-color:#31112c;"><a href="index.php" style="color:#c3aed6;">Voltar ao inicio</a></button>
                    </div>
                </div>
                    </form>
                </div>
                                            
            </div>
            
            
            </div>
    </div>
</section>
</body>

</html>
