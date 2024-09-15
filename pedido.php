<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="alert" id="alert" role="alert"></div>
            <h2>Fazer pedido</h2>
            <br>
            <form action="cadastrar_pedido.php" method="POST">
            <div class="form-group">
                <label for="nome_produto">Adicionar produto:</label>
                <input type="text" class="form-control" id="nome_produto" name="nome_produto" aria-describedby="nomeHelp" placeholder="Digite o produto">
            </div> 
            <div class="form-group">
                <label for="qtd_produto">Quantidade:</label>
                <input type="number" class="form-control" id="qtd_produto" name="qtd_produto" maxlength="10">
            </div>
            <div class="form-group">
                <label for="obs_produto">Observação:</label>
                <input type="text" class="form-control" id="obs_produto" name="obs_produto">
            </div>
            <div class="form-group">
                <label for="preco_produto">Valor unitário:</label>
                <input type="text" class="form-control" id="valor_produto" name="valor_produto">
            </div>
            <button type="submit" class="btn btn-primary">Adicionar Item</button>
            <?php if(isset($result)): ?>
            <div class="alert alert-success" role="alert">
                <?php echo "Item adicionado com sucesso </br>"; ?>
            </div>
            <?php endif ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>