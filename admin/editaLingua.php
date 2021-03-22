<?php

$con = mysqli_connect("localhost", "root", "","pap2021vermo");
$id=intval($_GET["id"]);
$sql="select * from linguas where linguaId=".$id;
$resultlinguas=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($resultlinguas);

?>


<!DOCTYPE html>
<!--
    Transit by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foca-te no jogo!</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]>
    <script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/common.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
</head>
<body class="landing">



<h1>Editar </h1>

<form action="confirmaEditaLingua.php" method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?php echo $id?>">

    <label style="color:white; font-size: 15px" class="badge badge-dark">Nome: <?php echo $dados['linguaNome']?></label>
    <input type="text" name="nomeLingua" value="<?php echo $dados['linguaNome']?>">
    <br>

    <label style="color:white; font-size: 15px" class="badge badge-dark">Bandeira:</label>
    <input type="file" name="linguaBandeiraURl"  style="color: darkgray">
    <hr>


        <br><br><br>
        <input type="submit" value="Edita">
</form>
