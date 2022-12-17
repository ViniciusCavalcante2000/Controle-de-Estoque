<?php

require_once('conn.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Controle de Estoque</title>
</head>

<body id="conteudo">
  <p class="contr">CONTROLE DE ESTOQUE</p>
  <div>
    <form action="inserir.php" method="post" class="text-center">
      <p>Entrada de Produtos</p>
      <label>Nome do Produto:</label>
      <input type="text" name="nome" class="form-control form-control-lg" />
      <label>Quantidade:</label>
      <input type="number" name="quantidade" class="form-control form-control-lg" />
      <input type="submit" value="Inserir" class="btn btn-primary btn-lg" />
    </form>
    <form action="excluir.php" method="post" class="text-center">
      <p>Saída de Produtos</p>
      <label>Nome do Produto:</label>
      <input type="text" name="nome" class="form-control form-control-lg" />
      <label>Quantidade:</label>
      <input type="number" name="quantidade" class="form-control form-control-lg" />
      <input type="submit" value="Excluir" class="btn btn-primary btn-lg" />
    </form>
    <form action="excluir_produto.php" method="get" class="text-center">
      <p>Exclusão de Registro</p>
      <label>Nome do Produto:</label>
      <input type="text" name="nome" class="form-control form-control-lg" />
      <input type="submit" value="Excluir Produto" class="btn btn-primary btn-lg" />
    </form>
    <form action="relatorio.php" method="post" class="text-center">
      <input type="submit" value="Gerar Relatório de Estoque" class="btn btn-primary btn-lg" />
    </form>
  </div>
</body>

</html>