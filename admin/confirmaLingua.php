<?php
$con = mysqli_connect("localhost", "root", "","pap2021vermo");

$linguaNome=addslashes($_POST["linguaNome"]);

$linguaBandeiraURl=$_FILES["linguaBandeiraURl"]["name"];


 $sql="insert into linguas (linguaNome,linguaBandeiraURl) 
values('".$linguaNome."','".$linguaBandeiraURl."')";

mysqli_query($con,$sql);
header("location: lingua.php");
?>