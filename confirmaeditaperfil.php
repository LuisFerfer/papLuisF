<?php
include_once("includes/body.inc.php");
$con = mysqli_connect("localhost", "root", "","pap2021vermo");

$id=intval($_GET['id']);

$perfilId = intval($_SESSION['id']);
$perfilNome = addslashes($_POST['perfilNome']);
$perfilAvatar = $_FILES['perfilAvatar']['name'];
$perfilBanner = $_FILES['perfilBanner']['name'];
$perfilEmail = addslashes($_POST['perfilEmail']);
$novoNome = "images/" . $perfilAvatar;
$novoNome2 = "images/" . $perfilBanner;


$sql = "UPDATE perfis set perfilNome='".$perfilNome."' ";

if ($perfilAvatar!=''){
    $sql.=", perfilAvatar='".$novoNome."' ";
    copy($_FILES['perfilAvatar']['tmp_name'],$novoNome);
}

if ($perfilBanner!=''){
    $sql.=", perfilBanner='".$novoNome2."' ";
    copy($_FILES['perfilBanner']['tmp_name'],$novoNome2);
}
$sql.=",  perfilEmail='".$perfilEmail."', perfilId='".$perfilId."' where perfilId=$id";


print_r($sql);
mysqli_query($con, $sql);
header("location: perfil.php?id=".$id);