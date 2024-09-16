function calcular(){
    var total = 0
    var qtd_produto = parseFloat(document.getElementById("qtd_produto").value, 10);
    var valor_unitario = parseFloat(document.getElementById("valor_produto").value, 10);
    document.getElementById("valor_total").value = (qtd_produto * valor_unitario).toFixed(2);
}

var controleCampo = 1;
function addProduto(){
    controleCampo++;
    document.getElementById('formulario_pedido').insertAdjacentHTML('beforeend', '<br><div class="form-row"> <div class="col-7"> <input type="text" class="form-control" id="nome_produto' + controleCampo + '" name="nome_produto' +controleCampo + '" aria-describedby="nomeHelp" placeholder="Digite o produto" onkeyup="pesquisarUsuario('+controleCampo + ')"> </div> <div class="col"> <input type="number" min="1" step="0.01" class="form-control" id="qtd_produto' + controleCampo + '" name="qtd_produto' + controleCampo + '" onfocus ="calcular()"></div> <div class="col"> <input type="number" min="1" step="0.01" class="form-control" id="valor_produto' + controleCampo + '" name="valor_produto' + controleCampo + '" onfocus ="calcular()"> </div> <div class="col"> <input type="number" min="1" step="0.01" class="form-control" id="valor_total' + controleCampo + '" name="valor_total' + controleCampo + '" onfocus="calcular()"> </div> <button type="button" class="btn btn-primary" id="' + controleCampo + '" onclick="removerCampo(' + controleCampo + ')"> - </button> </div>');
    
}

