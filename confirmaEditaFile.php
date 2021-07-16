<?php
include_once("includes/body.inc.php");
$ficheiro = $_POST['texto'];
$myfile = fopen("palavras.txt", "w+") or die("Unable to open file!");
fwrite($myfile,$ficheiro);
header("location: backoffice.php");