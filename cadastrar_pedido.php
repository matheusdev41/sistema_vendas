<?php

include("conexao.php");

$nome_produto = $_POST["nome_produto"];
$qtd_produto = $_POST["qtd_produto"];
$obs_produto = $_POST["obs_produto"];
$valor_produto = $_POST["valor_total"];
$data_hora = $_POST["data_pedido"];

$sql = "INSERT INTO item_pedido(nome_produto, observacao, preco_und, quantidade, data_hora) values ('$nome_produto', '$obs_produto', '$valor_produto', '$qtd_produto', ''$data_hora)";

 try{

    $result = mysqli_query($conexao, $sql);
    
}catch(mysqli_sql_exception $msn){
     echo 'item não cadastrado'; 
}

    include('pedido.php');
?>



    