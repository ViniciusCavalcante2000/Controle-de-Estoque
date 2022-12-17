<?php

ob_start();

require_once('conn.php');

?>



<?php



$prod =  $_POST['nome'];
$quant = $_POST['quantidade'];

$sql = "SELECT * FROM produto where produto = '$prod'";
$query = mysqli_query($conn,$sql);

if(mysqli_num_rows($query) > 0) {
  $sql = "UPDATE produto SET quantidade = quantidade + '$quant' WHERE produto = '$prod'";
  $query = mysqli_query($conn,$sql);
} else {
  $sql = "INSERT INTO produto (produto,quantidade) VALUES ('$prod','$quant')";
  $query = mysqli_query($conn,$sql);
}

if(!$query) {
  echo "Erro ao inserir";
} else {
    header("location: index.php");
ob_end_flush();
}



?>