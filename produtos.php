<!doctype php>
<html>
<head>
	<title>Produtos</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

	// Create connection
$conn = new mysqli('localhost', 'root', '','ldj');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//$a = $conn->query("INSERT INTO usuarios (login,senha) VALUES ('Miriam', '08071997')");

$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li> id: " . $row['codprod']."<br> Tipo: " . $row['tipo']. "<br> Nome: " . $row['nome'].
        "<br> Preço " . $row['preco']. 
        "<br> Tipo de negócio" . $row['tiponegocio'].
        "<br> img :" . $row['Imagem']."</li><br>";
    }
    echo "</ul>";
} else {
    echo "0 results";
}
	?>
</body>
</html>