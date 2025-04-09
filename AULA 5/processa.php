<?php
session_start();

//Validaçao basica

$nome   = htmlspecialchars($_POST['nome']);
$email  = filter_input(INPUT_POST,'email');
$senha  = $_POST['senha'];
$lembrar = isset($_POST['lembrar']);

if (!$email){
    echo "E-mail inválido";
    exit;
}


//Armazenar nome na sessão 

$_SESSION['usuario'] = $nome;

//Criar cookie quando marcado

if ($lembrar){
    setcookie("email_usuario",$email,time() +3600);//1 hora
}

//Redireciona para  página com sessão

header("Location:sessao.php");
exit;
?>