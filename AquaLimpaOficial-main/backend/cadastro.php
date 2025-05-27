<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $dtnasc = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    

        
        $sql = "INSERT INTO usuario (nome, dtnasc ,email, senha) VALUES ('$nome','$dtnasc', '$email', '$senha')";
        if (mysqli_query($conexao, $sql)) {
header("Location: /AquaLimpaOficial-main/index.html");


          
        } else {
            echo "Erro ao cadastrar: " . mysqli_error($conexao);
        }
    }


?>