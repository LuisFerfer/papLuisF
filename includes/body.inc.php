<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "pap2021vermo");
$sql="select * from utilizadores";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);



function top(){
    ?>

    <!DOCTYPE html>
    <!--
        Transit by TEMPLATED
        templated.co @templatedco
        Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
    -->
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Vermo!</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--[if lte IE 8]>
        <script src="js/html5shiv.js"></script><![endif]-->
        <!--   <script src="js/jquery.min.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-layers.min.js"></script>
        <script src="js/init.js"></script>
        <script src="js/common.js"></script>
        <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
-->
        <script>

                var stage=1;
                $('document').ready(function(){
                <?php
                if (isset($_SESSION['msg'])) {
                if ($_SESSION['msg'] == 1){
                ?>
                alert("Registado com sucesso");
                <?php


                }elseif($_SESSION['msg'] == 2){
                ?>

                <?php
                }elseif($_SESSION['msg'] == 3){
                ?>
                alert("A sua conta foi suspensa.");
                <?php
                }elseif($_SESSION['msg'] == 4){
                ?>
                alert("Nome de utilizador e/ou password errados.");

                <?php
                }
                unset($_SESSION['msg']);
                }
                ?>
                swap(stage);
            });





        </script>

        <noscript>
            <link rel="stylesheet" href="css/skel.css" />
            <link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" href="css/style-xlarge.css" />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <script src="js/jquery.min.js"></script>
            <script src="js/common.js"></script>
        </noscript>

        <!--teste-->
    </head>

    <body  class="landing" id="teste001">
    <!-- Header -->


                                      <!-- REGISTAR -->
    <div id="id01" class="modal">

        <?php
        $con = mysqli_connect("localhost", "root", "", "pap2021vermo");
        $sql="select * from utilizadores";
        $result=mysqli_query($con,$sql);
        $dados=mysqli_fetch_array($result);

        ?>

        <form class='modal-content' action="confirmarRegistar.php" method="post">
        <div class="container" style="margin-left: 10px;width: 700px">
            <h2>Registar</h2>
            <label for="name"><b>Nome do Utilizador</b></label>
            <input type="text" placeholder="Insira o Utilizador" name="perfilNome" required style="width: auto;">

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Insira o seu Email" name="utilizadorLogin" required style="width: auto;">

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Insira a Password" name="utilizadorPassword" required style="width: auto;">



                <span class="password">Já tem conta? <a onclick="document.getElementById('id01').style.visibility='hidden';document.getElementById('id02').style.display='block'; document.getElementById('teste001').style.overflow='hidden'; " style="color: #00aff1">Entrar </a></span>





            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
                <button type="submit" class="cancelbtn"  style="background-color: #4CAF50">Registar</button>
            </div>
        </div>
        </form>
    </div>

                                          <!-- LOGIN -->
    <div id="id02" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" action="confirmarLogin.php" method="post">
            <div class="container">
                <h2>Log In</h2>

                <label for="name"><b>Utilizador</b></label>
                <input type="text" placeholder="Insira o Utilizador" name="perfilNome" required style="width: auto;">

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Insira a Password" name="utilizadorPassword" required style="width: auto;">


                <span class="password">Ainda não tem conta? <a onclick="document.getElementById('id02').style.visibility='hidden';document.getElementById('id01').style.display='block'; document.getElementById('teste001').style.overflow='hidden'; " style="color: #00aff1">Registar </a></span>



                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancelar</button>
                    <button onclick="entrar()" type="submit" class="cancelbtn" style="background-color: #4CAF50">Entrar</button>
                </div>
            </div>
        </form>
    </div>



    <script>
        // Get the modal
        var modal1 = document.getElementById('id01');
        var modal2 = document.getElementById('id02');
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal1) {
                modal1.style.display = "none";
                document.getElementById('teste001').style.overflow='visible';
            } else if (event.target == modal2){
                modal2.style.display = "none";
                document.getElementById('teste001').style.overflow='visible';
            }
        }
    </script>


<?php
}
function bottom(){

    ?>



    </body>
    </html>
<?php }
?>