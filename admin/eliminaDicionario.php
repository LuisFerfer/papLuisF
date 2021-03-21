<?php
$con=mysqli_connect("localhost","root","","pap2021vermo");
$id=intval($_GET['id']);
$sql= "delete from dicionarios where dicionarioId=".$id;
mysqli_query($con,$sql);
header("location:../admin/dicionario.php");


?>
