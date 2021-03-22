<?php
$con=mysqli_connect("localhost","root","","pap2021vermo");
$nome=addslashes($_POST['nomeDicionario']);
$id=intval($_POST['id']);
$ficheiro=($_FILES['dicionarioFicheiroURL']['name']);
$nivel=addslashes($_POST['dicionarioNivel']);
$linguaid=intval($_POST['dicionarioLinguaId']);



$sql="Update dicionarios set dicionarioNome='".$nome."',dicionarioNivel='".$nivel."',dicionarioLinguaId='".linguaid."',dicionarioFicheiroURL='".$ficheiro."'";
if($ficheiro!=''){
    $sql.="dicionarioFicheiroURL='".$ficheiro."'";

}




mysqli_query($con,$sql);
header("location:dicionario.php");
mysqli_error($con);
?>