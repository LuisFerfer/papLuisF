<?php
$con=mysqli_connect("localhost","root","","pap2021vermo");
$nome=addslashes($_POST['nomeLingua']);
$id=intval($_POST['id']);
$img=$_FILES["linguaBandeiraURL"]["name"];
$novoNome="../images/".$img;

$sql="Update linguas set linguaNome='".$nome."'";
if($img!=''){
    $sql.=", linguaBandeiraURL='".$novoNome."'";

}

$sql.=" where linguaId=".$id;
mysqli_query($con,$sql);
header("location:lingua.php");
mysqli_error($con);
?>