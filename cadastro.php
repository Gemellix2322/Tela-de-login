<?php
include_once "conexao.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "insert into usuarios (username,password) values ('$username','$password')";

if (mysqli_query($conn, $sql)){
    header("Location: menu.php");
} else{
    header("Location: index.php");
    echo "<script>alert('Erro no cadastro');</script>";
}
?>