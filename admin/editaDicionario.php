<?php
$id=intval($_GET['dicionarioId']);
$con=mysqli_connect("localhost","root","","pap2021vermo");
$sql2="select * from dicionarios where dicionarioId=".$id;
$result2=mysqli_query($con,$sql2);
$dados2=mysqli_fetch_array($result2);

?>

<h1>Editar</h1>

<form action="confirmaEditaDicionario.php" method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?php echo $id?>">

    <label>Nome:</label>
    <input type="text" name="nomeDicionario" value="<?php echo $dados2['dicionarioNome']?>">
    <br>
    <label>Ficheiro</label><br>
    <src="../<?php echo $dados2['dicionarioFicheiroURL']?>"><br>

    <input type="submit" value="Edita">
</form>
