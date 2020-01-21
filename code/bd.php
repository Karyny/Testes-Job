<?php 

  $servername = "http://localhost:8081";
  $database = "auryn";
  $username = "root";
  $password = "root";

 //conexão BD
 $conn = mysqli_connect($servername, $username, $password, $database);
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
 echo "Connected successfully";
 mysqli_close($conn);


//insert in BD
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

$sql = "INSERT INTO TabelaImagem (codigo, evento, imagem,
nome_imagem, size_image, type_imagem, tmp_name_imagem) values ('$codigo', '$evento', '$descricao', '$nome_imagem',
'$tamanho_imagem', '$tipo_imagem', '$imagem')"; 
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

mysqli_close($conn);

?>

