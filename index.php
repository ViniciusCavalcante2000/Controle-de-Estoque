<?php

require_once('conn.php');

?>

<!DOCTYPE html>
<html>

<head>
  <title>Formulário de Produtos</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>CONTROLE DE ESTOQUE</h1>
  <form action="inserir.php" method="post">
    <h2>Entrada de Produtos</h2>
    <label>Nome do Produto:</label>
    <input type="text" name="nome" />
    <label>Quantidade:</label>
    <input type="number" name="quantidade" />
    <input type="submit" value="Inserir" />
  </form>
  <form action="excluir.php" method="post">
    <h2>Saída de Produtos</h2>
    <label>Nome do Produto:</label>
    <input type="text" name="nome" />
    <label>Quantidade:</label>
    <input type="number" name="quantidade" />
    <input type="submit" value="Excluir" />
  </form>  
  <form action="excluir_produto.php" method="get">
    <h2>Exclusão de Registro</h2>
    <label>Nome do Produto  :</label>
    <input type="text" name="nome">
    <input type="submit" value="Excluir Produto">
  </form>
  <form action="relatorio.php" method="post">
    <input type="submit" value="Gerar Relatório de Estoque" />
  </form>
</body>

</html>

