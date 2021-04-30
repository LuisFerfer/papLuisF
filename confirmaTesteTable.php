<?php
$con = mysqli_connect("localhost", "root", "","pap2021vermo");

$distrito=addslashes($_POST["tabelas"]);
$zona=addslashes($_POST["tabelas1"]);
$zonaValor=addslashes($_POST["tabelas2"]);