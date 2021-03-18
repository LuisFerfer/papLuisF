<?php
$con = mysqli_connect("localhost", "root", "","pap2021vermo");
$sql2="select * from dicionarios";
$result2=mysqli_query($con,$sql2);

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

<table class="table-striped" style=" color: #000000; font-weight: bold; font-size: 20px; width: 100%; height: 100%; margin-left: 20px; margin-bottom: 30px; margin-right: 20px">

    <tr>
        <td colspan="3" style="margin-bottom: 30px">
            <a href="adicionaDicionario.php" style="color: #FFFFFF"><button type="button" class="btn btn-success"><i class="fa fa-plus-circle"></i>&nbsp;Adicionar</button></a>
        </td>

    </tr>

    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Nivel</th>
        <th>Lingua ID</th>
        <th>URL txt</th>
        <th colspan="2">Op��es</th>
    </tr>

    <tr >
  <?php while ($dadosDicionario = mysqli_fetch_array($result2)){ ?>
    <tr>
        <td> <?php echo $dadosDicionario["dicionarioId"]?>  </td>
        <td> <?php echo $dadosDicionario["dicionarioNome"]?> </td>
        <td> <?php echo $dadosDicionario["dicionarioNivel"]?> </td>
        <td> <?php echo $dadosDicionario["dicionarioLinguaId"]?> </td>
        <td> <?php echo $dadosDicionario["dicionarioFicheiroURL"]?> </td>
        <td><a href="editaDicionario.php"> Editar </a></td>
        <td><a href="eliminaDicionario.php"> Eliminar </a></td>
    </tr>
<?php } ?>

    </tr>
</table>
</body>
</html>