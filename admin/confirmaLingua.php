<?php
$con = mysqli_connect("localhost", "root", "","pap2021vermo");

$linguaNome=addslashes($_POST["linguaNome"]);

$linguaBandeiraURl=$_FILES["linguaBandeiraURl"]["name"];
$novoNome="../images/".$linguaBandeiraURl;

 $sql="insert into linguas (linguaNome,linguaBandeiraURl) 
values('".$linguaNome."','".$novoNome."')";

mysqli_query($con,$sql);
header("location: lingua.php");
?>