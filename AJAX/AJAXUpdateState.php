<?php
include_once ("../includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
$estado=addslashes($_POST["utilizadorEstado"]);
$tipo=addslashes($_POST['utilizadorTipo']);
$id=intval($_GET['id']);
$sql="update utilizadores set utilizadorEstado='".$estado."', utilizadorTipo='".$tipo."' where utilizadorId=".$id;
mysqli_query($con,$sql);
print_r($sql);
header("location: ".$_SERVER['HTTP_REFERER']);