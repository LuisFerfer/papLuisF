<?php
include_once ("includes/config.inc.php");
$con=mysqli_connect("localhost","root","","pap2021vermo");
$nome=addslashes($_POST['perfilNome']);
$pwd=md5(addslashes($_POST['utilizadorPassword']));



$sql="select * from utilizadores inner join perfis where perfilNome='$nome' and utilizadorPassword='$pwd'";
$res=mysqli_query($con, $sql);
$dados=mysqli_fetch_array($res);
if(mysqli_affected_rows($con)>0){
    session_start();
    $_SESSION['id'] = $dados['perfilId'];
    $_SESSION['nome'] = $dados['perfilNome'];
    $_SESSION['msg'] = 2;

}
else{
    session_start();
    $_SESSION['msg'] = 4;
}


header("location: index.php");


?>
