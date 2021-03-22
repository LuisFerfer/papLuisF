<?php
$con = mysqli_connect("localhost", "root", "","pap2021vermo");


$dicionarioNome=addslashes($_POST["dicionarioNome"]);

$dicionarioNivel=addslashes($_POST["dicionarioNivel"]);

$dicionarioFicheiroURl=$_FILES["dicionarioFicheiroURl"]["name"];

$dicionarioLinguaId=intval($_POST["dicionarioLinguaId"]);



$sql="insert into dicionarios (dicionariold,dicionarioNome,dicionarioNivel,dicionarioFicheiroURl,dicionarioLinguaId)
values('".$dicionarioNome."','".$dicionarioNivel."','".$dicionarioFicheiroURl."','".$dicionarioLinguaId."')";

mysqli_query($con,$sql);
header("location: dicionario.php");
?>