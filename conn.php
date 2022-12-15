<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'estoque01';
$conn = mysqli_connect($servidor,$usuario,$senha,$banco);

if(!$conn)
{
#echo "erro";
}else{
#echo "tudo ok com o banco";
}
?>