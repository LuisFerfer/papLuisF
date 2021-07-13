<?php
include_once("../includes/body.inc.php");

$nome=addslashes($_POST['nome']);

$password=md5(addslashes($_POST['password']));
$sql="select * from utilizadores where utilizadorLogin='$nome' and utilizadorPassword='$password'";
$result=mysqli_query($con,$sql);
echo mysqli_affected_rows($con);
?>
