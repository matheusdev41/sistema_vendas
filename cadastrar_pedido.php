<?php

include("conexao.php");

$nome_produto = $_POST["nome_produto"];
$qtd_produto = $_POST["qtd_produto"];
$obs_produto = $_POST["obs_produto"];
$valor_produto = $_POST["valor_produto"];

$sql = "INSERT INTO item_pedido(nome_produto, observacao, preco_und, quantidade) values ('$nome_produto', '$obs_produto', '$valor_produto', '$qtd_produto')";

$resultado = mysqli_query($conexao, $sql);


?>