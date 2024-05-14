<?php
session_start();
//print_r($_REQUEST);

//VERIFICA SE O BOTAO FOI APERTADO NA PAGINA DE LOGIN, E SE TODOS OS CAMPOS FORAM PREENCHIDOS
if(!empty($_POST['entrar']) && !empty($_POST['senha']) && !empty($_POST['email'])){

    //INCLUI A CONEXAO COM O BANCO DE DADOS, E PASSA O VALOR DIGITADO NO LOGIN PARA AS VARIÁVEIS
 include_once('conexao.php');
 $usuario = $_POST['usuario'];
 $senha = $_POST['senha'];
 $email = $_POST['email'];
 //print_r($usuario);
 //print_r($senha);

 //RODA O SELECT FROM NO BANCO DE DADOS PARA VERIFICAR SE AS VARIAVEIS BATEM COM OS DADOS DO BANCO DE DADOS
 $sql = "SELECT * FROM  usuarios WHERE email = '$email' and senha = '$senha'";
 $result = $mysqli->query($sql);
 
 //print_r($sql);
 //print_r($result); 

 //VERIFICA OS ROWS DO SQL, CASO O ROW SEJA = 1 ELE EXISTE (A VARIAVEL É = AO SALVO DO BANCO DE DADOS) SE NÃO ELE NÃO EXISTE
 if(mysqli_num_rows($result) < 1){
    //print_r("Não existe");
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
 }
 else{
    //print_r("Existe");
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('Location: site.php');
 }
}
else{
    header('Location: login.php');
}
?>