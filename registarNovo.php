<?php
include_once ("includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);

$nome=addslashes($_POST['nome']);
$email=addslashes($_POST['email']);
$password=addslashes($_POST['password']);
$telefone=addslashes($_POST['telefone']);

echo $sql="insert into users(userName,userPassword) values('$nome','$password')";
mysqli_query($con,$sql);
$lastId=mysqli_insert_id($con)
;

echo $sql2="insert into utilizadores(utilizadorNome,utilizadorTelefone,utilizadorEmail,utilizadorEstado,utilizadorUserId,utilizadorPontos) values('$nome','$telefone','$email','ativo','$lastId','20')";
mysqli_query($con,$sql2);
$lastId2=mysqli_insert_id($con);

session_start();
$_SESSION['id']=$lastId2;
$_SESSION['nome']=$nome;

header("location:index.php");
?>