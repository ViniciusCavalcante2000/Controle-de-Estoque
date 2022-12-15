<?php
require_once('conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<a href="index.php" class="button">Voltar</a>


<?php


$sql = "SELECT * FROM produto";
$query = mysqli_query($conn, $sql);
$total = mysqli_num_rows($query);

echo "<table>";
echo "<tr>";
echo "<th>Produto</th>";
echo "<th>Quantidade</th>";
echo "</tr>";

while ($rows_tabela = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td>" . $rows_tabela['Produto'] . "</td>";
    echo "<td>" . $rows_tabela['Quantidade'] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>
</body>






</html>