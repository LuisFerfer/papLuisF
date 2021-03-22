<?php
$con=mysqli_connect("localhost","root","","pap2021vermo");
$nome=addslashes($_POST['nomeDicionario']);
$id=intval($_POST['id']);
$ficheiro=time().".txt";
$novoNome="../".$ficheiro;

$sql="Update dicionarios set dicionarioNome='".$nome."'";
if($ficheiro!=''){
    $sql.=", dicionarioFicheiroURL='../".$ficheiro."'";
   // copy($_FILES['logoEmpresa']['tmp_name'],$novoNome);
}

$sql.=" where dicionarioId=".$id;
mysqli_query($con,$sql);
header("location:dicionario.php");
mysqli_error($con);
?>