<?php
$con = mysqli_connect("localhost", "root", "", "pap2021vermo");

$sql="SHOW TABLES from pap2021vermo";
$result = mysqli_query($con,$sql);
$result1 = mysqli_query($con,$sql);
$result2 = mysqli_query($con,$sql);
?>
<form enctype="multipart/form-data" method="post" action="confirmaTesteTable.php">
<label>Escolhe a tabela para a qual distritos será copiado: </label>
<select style="margin-bottom: 20px" name="tabelas">
<?php
while ($dados= mysqli_fetch_array($result)){
?>
        <option><?php echo $dados['Tables_in_pap2021vermo']?></option>
<?php
}
?>
</select>

<br>

<label>Escolhe a tabela para a qual Zona será copiado: </label>
<select style="margin-bottom: 20px" name="tabelas1">
    <?php
    while ($dados= mysqli_fetch_array($result1)){
        ?>
        <option><?php echo $dados['Tables_in_pap2021vermo']?></option>
        <?php
    }
    ?>
</select>

<br>

<label>Escolhe a tabela para a qual ZonaValor será copiado: </label>
<select name="tabelas2" style="margin-bottom: 20px">
    <?php
    while ($dados= mysqli_fetch_array($result2)){
        ?>
        <option><?php echo $dados['Tables_in_pap2021vermo']?></option>
        <?php
    }
    ?>
</select>

<br>

<button>Inserir valores nas tabelas</button>
</form>