<?php
$con = mysqli_connect("localhost", "root", "","pap2021vermo");


$dicionarioNome=addslashes($_POST["dicionarioNome"]);
$dicionarioNivel=addslashes($_POST["dicionarioNivel"]);

$dicionarioFicheiroURl=$_FILES["dicionarioFicheiroURl"]["name"];

$dicionarioLinguaId=intval($_POST["dicionarioLinguaId"]);
echo $dicionarioNome.'<br>'.$dicionarioNivel.'<br>'.$dicionarioFicheiroURl.'<br>'.$dicionarioLinguaId;
//echo $sql="insert into dicionarios (dicionarioNome,dicionarioNivel,dicionarioFicheiroURl,dicionarioLinguaId)
//values('".$dicionarioNome."','".$dicionarioNivel."','".$dicionarioFicheiroURl."','".$dicionarioLinguaId."')";
echo $sql="insert into dicionarios (dicionariold,dicionarioNome,dicionarioNivel,dicionarioFicheiroURl,dicionarioLinguaId) 
values('3','Andre','2', 'andre.txt', '50')";

mysqli_query($con,$sql);
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
//header("location: backoffice.php");
?>