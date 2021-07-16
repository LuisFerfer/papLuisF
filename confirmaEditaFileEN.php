<?php
include_once("includes/body.inc.php");
$ficheiro = $_POST['texto'];
$myfile = fopen("palavrasEN.txt", "w+") or die("Unable to open file!");
fwrite($myfile,$ficheiro);
header("location: backoffice.php");