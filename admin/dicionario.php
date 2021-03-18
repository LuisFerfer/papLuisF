<?php
$con = mysqli_connect("localhost", "root", "","pap2021vermo");
$sql2="select * from dicionarios";
$result2=mysqli_query($con,$sql2);

?>
<!DOCTYPE html>
<body class="landing">
<form action="confirmaDicionario.php" method="post" enctype="multipart/form-data">
    <label style="color:white; font-size: 15px" class="badge badge-dark">Nome: </label>
    <input type="text" style="width: 300px" name="dicionarioNome"><hr>

    <label style="color:white; font-size: 15px" class="badge badge-dark">Nivel: </label>
    <input type="text" style="width:  300px" name="dicionarioNivel"><hr>

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

    <input type="Submit" class="btn btn-danger" value="Adiciona"><br>

<hr>
</form>

<table class="table-striped" style=" color: #000000; font-weight: bold; font-size: 20px; width: 100%; height: 100%; margin-left: 20px; margin-bottom: 30px; margin-right: 20px">

    <tr>
        <td colspan="3" style="margin-bottom: 30px">
            <a href="../Adiciona/AdicionaJogo.php" style="color: #FFFFFF"><button type="button" class="btn btn-success"><i class="fa fa-plus-circle"></i>&nbsp;Adicionar</button></a>
        <hr>
        </td>

    </tr>

    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Nivel</th>
        <th>Lingua ID</th>
        <th>URL txt</th>
        <th colspan="2">Opções</th>
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