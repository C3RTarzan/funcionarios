<?php
session_start();
include("../connection.php");

if(empty($_POST['nome']) || empty($_POST['cargo']) || empty($_POST['salario'])){ //checar se tem campos em branco   
    $_SESSION['campos_branco'] = true;
    header('Location: index.php');
    exit();
 }

$nome =  trim($_POST['nome']);
$cargo =  trim($_POST['cargo']);
$salario =  trim($_POST['salario']);
$id = 1;

while(true){
    $cont = "select * from funcionarios where userid = '$id'";
    $resultcont = mysqli_query($conexao, $cont);
    $row = mysqli_num_rows($resultcont);
    if($row > 0){
        $id += 1;
    }else{
        break;
    }
}
$query = "INSERT into funcionarios (cargo, nome, salario, userid) value ('$cargo', '$nome', '$salario', '$id')";
$result = mysqli_query($conexao, $query);


$_SESSION['id'] = $id;
$_SESSION['registrado'] = true;
header("Location: index.php");
exit();
?>