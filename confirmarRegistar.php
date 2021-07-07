<?php
include_once("includes/config.inc.php");

$con = mysqli_connect("localhost", "root", "", "pap2021vermo");

//Variaveis para user
$utilizadorNome=addslashes($_POST['utilizadorNome']);
$utilizadorPass=addslashes($_POST['utilizadorPassword']);
$utilizadorPass=md5($utilizadorPass);
//_____________________________


//Variaveis perfil
$email=addslashes($_POST['utilizadorEmail']);

//_____________________________




$sql="insert into utilizadores(utilizadorId,utilizadorNome,utilizadorPassword) 
                    values (0,'".$utilizadorNome."','".$utilizadorPass."')";
mysqli_query($con,$sql);

$lastId=mysqli_insert_id($con);

$sql2="insert into perfis(perfilNome,perfilEmail,perfilUtilizadorId)
                    values ('".$utilizadorNome."','".$email."','".$lastId."')";
mysqli_query($con,$sql2);


session_start();
$_SESSION['id']=$lastId;
$_SESSION['nome']=$utilizadorNome;

error_reporting(E_ALL);

print_r($sql);
print_r($sql2);

header("location: index.php");


?>