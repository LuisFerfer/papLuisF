<?php
include_once("../includes/body.inc.php");
$con = mysqli_connect("localhost", "root", "", "pap2021vermo");
$pessoa=intval($_POST['pessoa']);
$pontuacao=intval($_POST['pontuacao']);

$sql="insert into tops(topId,topPontuacao,topUtilizadorId) values(0,'".$pontuacao."','".$pessoa."')";
$result=mysqli_query($con,$sql);
echo mysqli_affected_rows($con);
?>
