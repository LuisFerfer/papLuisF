<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "pap2021vermo");
$sql="select * from utilizadores";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);



function toping(){
    ?>
    <header id="header">
        <h1><a href="indexing.php"><img src="images/vermo"></a></h1>
        <nav id="nav">
            <ul>
                <img onclick="atualiza(0)" src="images/pt.png" style="  width:50px; height: 20px " >
                <img onclick="atualizaingles(0)" src="images/eng.png" style="width: 50px; height: 20px">
                <li><a href="indexing.php">Home</a></li>
                <li><a href="generic.php">Other Game Modes</a></li>
                <!--<li><a href="elements.html">Elements</a></li>-->
                <li><a  ><button class="button special" onclick="document.getElementById('id01').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="width:auto;">Sign Up</button></a></li>
                <li><a  ><button class="button special" onclick="document.getElementById('id02').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="width:auto;">Log In</button></a></li>
            </ul>
        </nav>
    </header>
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
--><script>
            var stage=1;
            $('document').ready(function (){
                swapingles(stage);
                //alert('aaa');
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

    <body class="landing" id="teste001">
    <!-- Header -->
    <header id="header">
        <h1><a href="index.php"><img src="images/vermo"></a></h1>

        <nav id="nav" >


        </nav>
    </header>


    <div id="id01" class="modal">
        <!--
         <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
         -->
        <?php
        $con = mysqli_connect("localhost", "root", "", "pap2021vermo");
        $sql="select * from utilizadores";
        $result=mysqli_query($con,$sql);
        $dados=mysqli_fetch_array($result);


        echo "<form class='modal-content' action=\"../adicionaNovoUtilizador.php?id=".$dados['utilizadorId']." \">  ";
        ?>

        <div class="container" style="width: 700px">
            <h1>Sign Up</h1>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Username" name="utilizadorNome" required style="width: auto;">

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="utilizadorEmail" required style="width: auto;">

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="utilizadorPassword" required style="width: auto;">

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required style="width: auto;">

            <label>
                <input type="checkbox" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn" style="width: auto;">Sign Up</button>
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
        <span onclick="documentgetElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" action="/ConfirmaUtilizador.php">
            <div class="container">
                <h1>Log In</h1>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required  style="width: auto;">

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required  style="width: auto;">
                <label>
                    <input type="checkbox" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn"  style="width: auto;">Sign Up</button>
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


<?php }
function bottoming(){

    ?>
    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <section class="links">
                <div class="align-center">
                    <h3>Disclaimer</h3>
                    <li>Vermo! é apenas uma ideia para a minha PAP, não está perfeito nem pronto para o mercado.</li>
                    </ul>
                </div>
            </section>
            <div class="row">
                <div class="8u 12u$(medium)">
                    <ul class="copyright">
                        <li>&copy; Untitled. All rights reserved.</li>
                        <li>Design: <a href="http://templated.co">TEMPLATED</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>




    </body>
    </html>
<?php }
?>