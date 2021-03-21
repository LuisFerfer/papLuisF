<?php
include_once("../includes/body.inc.php");

$con=mysqli_connect("localhost","root","","pap2021vermo");
$id=intval($_GET["id"]);
$sql="select * from dicionarios where dicionarioId=".$id;
$resultdicionarios=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($resultdicionarios);

?>

<h1>Editar</h1>

<form action="confirmaEditaDicionario.php" method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?php echo $id?>">

    <label>Nome:</label>
    <input type="text" name="nomeDicionario" value="<?php echo $dados['dicionarioNome']?>">
    <br>
    <label>Ficheiro</label><br>
    <src="../<?php echo $dados['dicionarioFicheiroURL']?>"><br>

    <input type="submit" value="Edita">
</form>
