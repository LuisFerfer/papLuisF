<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "pap2021vermo");
$sql="select * from utilizadores";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);



function toping(){
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
                alert("Successfully registered");
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
                alert("Wrong Username and/or Password.");

                <?php
                }
                unset($_SESSION['msg']);
                }
                ?>
                swapingles(stage);
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



    <div id="id01" class="modal">
        <!--
         <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
         -->
        <?php
        $con = mysqli_connect("localhost", "root", "", "pap2021vermo");
        $sql="select * from utilizadores";
        $result=mysqli_query($con,$sql);
        $dados=mysqli_fetch_array($result);

        ?>
        <form class='modal-content' action="confirmarRegistar.php" method="post">
            <div class="container" style="width: 700px">
                <h2>Signup</h2>
                <label for="name"><b>Username</b></label>
                <input type="text" placeholder="Insert your Username" name="perfilNome" required style="width: auto;">

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Insert your Email" name="utilizadorLogin" required style="width: auto;">

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Insert a Password" name="utilizadorPassword" required style="width: auto;">







                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cance</button>
                    <button type="submit" class="cancelbtn"  style="background-color: #4CAF50">Sign up</button>
                </div>
            </div>
        </form>
    </div>
    <!--
        <script>
            // Get the modal
            var modal = document.getElementById('id01');
            var modal2 = document.getElementById('teste002');
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal2) {
                    alert('entrou')
                    modal.style.display = "none";
                    document.getElementById('teste001').style.overflow='visible';
                    modal.style.display = "none";
                }else {

                    alert('N entrou')
                }
            }
        </script>
    -->


    <div id="id02" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" action="confirmarLogin.php" method="post">
            <div class="container">
                <h1>Log In</h1>

                <label for="name"><b>Username</b></label>
                <input type="text" placeholder="Insert your Username" name="perfilNome" required style="width: auto;">

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Insira a sua Password" name="utilizadorPassword" required style="width: auto;">





                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                    <button onclick="entrar()" type="submit" class="cancelbtn" style="background-color: #4CAF50">Log in</button>
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
function bottoming(){

    ?>



    </body>
    </html>
<?php }
?>