<?php
$con = mysqli_connect("localhost", "root", "","pap2021vermo");


?>

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


</form>

