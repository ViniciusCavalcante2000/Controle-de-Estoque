<?php

require_once('conn.php');

?>

<?php

if (isset($_GET['nome']))
{
  $nome = $_GET['nome'];

  $query = mysqli_query($conn, "DELETE FROM produto WHERE Produto = '$nome'");

  if ($query)
  {
    echo "O produto foi excluído com sucesso!";
  }
  else
  {
    echo "O produto não pôde ser excluído!";
  }
}

?>