<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="alert" id="alert" role="alert"></div>
            <h2>Dados do pedido</h2>
            <br>
            <form>
                <div class="form-row">
                    <div class="col-7">
                    <label for="cliente">Cliente</label>
                    <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Digite o nome do cliente...">
                    </div>
                    <div class="col">
                    <label for="cliente">Vendedor</label>
                    <input type="text" class="form-control" id="vendedor" name="vendedor" placeholder="Nome do vendedor...">
                    </div>
                    <div class="col">
                    <label for="data_pedido">Data</label>
                    <input type="date" class="form-control" id="data_pedido" name="data_pedido">
                    </div>
                </div>
            </form>
            <br>
            <h3>Produtos</h3>  
            <br>
            <form action="cadastrar_pedido.php" method="POST">
                <div id="formulario_pedido">
                    <div class="form-row">
                        <div class="col-7">
                            <label for="nome_produto">Adicionar produto:</label>
                            <input type="text" class="form-control" id="nome_produto" name="nome_produto1" aria-describedby="nomeHelp" placeholder="Digite o produto" onkeyup="pesquisarUsuario(1)">
                        </div> 
                        <div class="col">
                            <label for="qtd_produto">Quantidade:</label>
                            <input type="number" min="1" step="0.01" class="form-control" id="qtd_produto" name="qtd_produto1" onfocus ="calcular()">
                        </div>
                        <div class="col">
                            <label for="preco_produto">Valor unitário:</label>
                            <input type="number" min="1" step="0.01" class="form-control" id="valor_produto" name="valor_produto1" onfocus ="calcular()">
                        </div>
                        <div class="col">
                            <label for="preco_total">Valor total:</label>
                            <input type="number" min="1" step="0.01" class="form-control" id="valor_total" name="valor_total1" onfocus="calcular()">
                        </div>
                    </div>
                </div>
            <br>
            <a href="#" id="btnAdicionarProduto" onclick="addProduto()" ><i class="fa fa-plus"></i>  + Adicionar mais um produto</a>
            <br>
                <div class="input-group">
                    <span class="input-group-text">Observações</span>
                    <textarea class="form-control" aria-label="Observações" id="obs_produto" name="obs_produto "></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Fazer pedido</button>
                <?php if(isset($result)): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo "Item adicionado com sucesso </br>"; ?>
                </div>
            <?php endif ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<script src="./script.js"></script>
</html>


