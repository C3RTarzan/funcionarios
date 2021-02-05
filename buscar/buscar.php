<?php
session_start();
include("../connection.php");

if(empty($_POST['nome'])){ //checar se tem campos em branco
    $_SESSION['campos_branco'] = true;
    header('Location: index.php');
    exit();
}

$id = trim($_POST['nome']);

if(!is_numeric($id)){
    $_SESSION['is_numeric'] = true;
    header('Location: index.php');
    exit();
}

$query = "SELECT * from funcionarios where userid = '$id'";
$result = mysqli_query($conexao, $query);
$dado = mysqli_fetch_array($result);
$row = mysqli_num_rows($result);

if($row > 0){
    $_SESSION['entrou'] = true;
    $_SESSION['id'] = $dado['userid'];
    $_SESSION['nome'] = $dado['nome'];
    $_SESSION['cargo'] = $dado['cargo'];
    $_SESSION['salario'] = $dado['salario'];
    header("Location: index.php");
    exit();
}else{
    $_SESSION['nao_entrou'] = true;
    header("Location: index.php");
    exit();
}


?>