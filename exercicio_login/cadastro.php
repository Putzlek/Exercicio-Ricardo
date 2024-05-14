<?php
if(!empty($_POST['enviar'])){

    include_once('conexao.php');
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $result = mysqli_query($mysqli, "INSERT INTO usuarios(usuario,senha,email) VALUES ('$usuario','$senha','$email')");
    print_r("<h2> Cadastrado com sucesso </h2>");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Micro+5+Charted&display=swap" rel="stylesheet">
<body>
<style>
h2{
    color: #1F621A;
    font-family: "Micro 5 Charted", sans-serif;
}
</style>
<a href="index.php">voltar</a>
    <h1>Insira seus dados</h1>
<form action="cadastro.php" method="POST">
                <p>
                    Usuário:<br>
                    <input type="text" name="usuario">
                </p>
                <p>
                    Email: <br>
                    <input type="email" name="email">
                <p>
                <p>
                    Senha:<br>
                    <input type="password" name="senha">
                </p>
                <p>
                    <input type="submit" name="enviar" value="enviar">
                </p>
                
    </form>
</body>
</html>