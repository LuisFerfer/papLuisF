<?php
$con = mysqli_connect("localhost", "root", "","pap2021vermo");


?>
<form action="confirmaLingua.php" method="post" enctype="multipart/form-data">
    <label style="color:white; font-size: 15px" class="badge badge-dark">Nome: </label>
    <input type="text" style="width: 300px" name="linguaNome"><hr>

    <label style="color:white; font-size: 15px" class="badge badge-dark">Ficheiro:</label>
    <input type="file" accept="image/*" name="linguaBandeiraURl" onchange="preview_image(event)" style="color: darkgray">
    <img id="output_image"/><hr>




    <input type="Submit" class="btn btn-danger" value="Adiciona"><br>

</form>

