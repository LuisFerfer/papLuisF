<?php
$con = mysqli_connect("localhost", "root", "","pap2021vermo");
$sql="select * from linguas";
$result=mysqli_query($con,$sql);

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

<form action="confirmaDicionario.php" method="post" enctype="multipart/form-data">
   <h1>Adiciona Dicionario</h1>

    <label style="color:white; font-size: 15px" class="badge badge-dark">Nome: </label>
    <input type="text" style="width: 300px" name="dicionarioNome"><hr>

    <label style="color:white; font-size: 15px" class="badge badge-dark">Nivel: </label>
    <input type="text" style="width:  300px" name="dicionarioNivel"><hr>
    <!--  Ideia: Criar Tabela com niveis -->

    <label style="color:white; font-size: 15px" class="badge badge-dark">Ficheiro:</label>
    <input type="file" name="dicionarioFicheiroURl"  style="color: darkgray">
    <hr>

    <label style="color:white; font-size: 15px" class="badge badge-dark">Lingua:</label>
    <select name="dicionarioLinguaId">
        <option value="-1">Escolha a lingua...</option>
        <?php
        $sql="select * from linguas order by linguaNome";
        $result=mysqli_query($con,$sql);
        while ($dados=mysqli_fetch_array($result)){
            ?>
            <option value="<?php echo $dados['linguaId']?>"><?php echo $dados['linguaNome']?></option>
            <?php
        }


        ?>

    </select>
<hr

    <a style="color: #FFFFFF"><button type="Submit" class="btn btn-success"><i class="fa fa-plus-circle"></i>&nbsp;Adicionar</button></a>


    <hr>
</form>

</body>
</html>