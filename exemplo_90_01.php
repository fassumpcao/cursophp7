<?php
$id = (isset($_GET["id"])) ? $_GET["id"]:1;

if(!is_numeric($id) || strlen($id) > 5){  //Tratar o dado
    exit("Invalido");
}
$conn = mysqli_connect("localhost", "root", "", "teste_desenvolvimento2");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {
    // code...
    echo $resultado->idusuario . " - ";
    echo $resultado->deslogin . "<br>";

}

 ?>
