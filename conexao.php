<?php
$localhost = "127.0.0.1";
$user = "root";
$password = "";
$banco = "login";
$conn = mysqli_connect($localhost, $user, $password, $banco);
if(! $conn){
    echo "Não conectou";
}