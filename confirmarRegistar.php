<?php
include_once("includes/config.inc.php");

$con = mysqli_connect("localhost", "root", "", "pap2021vermo");

//Variaveis para user
$perfilNome=addslashes($_POST['perfilNome']);
$utilizadorPass=md5(addslashes($_POST['utilizadorPassword']));
//_____________________________


//Variaveis perfil
$utilizadorLogin=addslashes($_POST['utilizadorLogin']);

//_____________________________




$sql="insert into utilizadores(utilizadorId,utilizadorLogin,utilizadorPassword) 
                    values (0,'".$utilizadorLogin."','".$utilizadorPass."')";
mysqli_query($con,$sql);

$errorNum=mysqli_errno($con);
$lastId=mysqli_insert_id($con);

$sql2="insert into perfis(perfilNome,perfilEmail,perfilId)
                    values ('".$perfilNome."','".$utilizadorLogin."','".$lastId."')";
mysqli_query($con,$sql2);


header("location: index.php?msg=".($errorNum==1062?'err':'ok'));


?>