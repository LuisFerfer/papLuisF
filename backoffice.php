<?php
include_once("includes/body.inc.php");
top();

?>

<header id="header">
    <h1><a href="index.php"><img src="images/vermopreto.png"></a></h1>
    <nav id="nav">
        <!--  <ul> <a href="perfil.php?id=<?php echo $_SESSION['id'] ?>"><img onclick="atualiza(0)" src="images/pt.png" style="  width:50px; height: 20px " >
                <a href="perfilingles.php?id=<?php echo $_SESSION['id'] ?>"><img onclick="atualizaingles(0)" src="images/eng.png" style="width: 50px; height: 20px">
-->
                    <li><a href="index.php" style="color: black">FrontOffice</a></li>

                    <!--<li><a href="elements.html">Elements</a></li>-->
                    <!-- <?php if(isset($_SESSION['id'])){ ?>
                        <li><a href="perfil.php?id=<?php echo $_SESSION['id'] ?>" style="color: black"><?php echo $_SESSION['nome'] ?></a></li>
                        <?php
                        $id = $_SESSION['id'];
                        $sql = "select utilizadorTipo from utilizadores where utilizadorId = ".$id;
                        $nibbas = mysqli_query($con, $sql);
                        $dados = mysqli_fetch_array($nibbas);
                        if ($dados['utilizadorTipo'] == "admin"){
                            ?>
                            <li><a href="backoffice.php" style="color: black">Backoffice</a></li>
                            <?php
                        }
                        ?>
                        <li><button class="button small" style="background-color: #aaaaaa; color: #8d93a0 ; " onclick="window.location.href='logout.php'">Sair</button> </li>
                    <?php } else{ ?>
                        <li><a  ><button class="button special" onclick="document.getElementById('id01').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="background-color: #aaaaaa; width:auto;">Registar</button></a></li>
                        <li><a  ><button class="button special" onclick="document.getElementById('id02').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="background-color: #aaaaaa; width:auto;">Entrar</button></a></li>
                        <?php
                    }
                    ?> -->
        </ul>
    </nav>
</header>

<style>
    .strokeme
    {
        color: white;
        text-shadow:
                -1px -1px 0 #000,
                1px -1px 0 #000,
                -1px 1px 0 #000,
                1px 1px 0 #000;
    }

    #custom-button{
        padding: 10px;
        color: white;
        background-color: #8d93a0;
        border: 1px solid #000000;
        border-radius: 5px;
        cursor: pointer;
        opacity: 70%;

    }
    #custom-button:hover {
        text-decoration: underline;
    }

    #custom-text {
        margin-left: 10px;
        font-family: sans-serif;
        color: #aaa;
    }

    #custom-button2{
        padding: 5px;
        color: white;
        background-color: #aaaaaa;
        border: 1px solid #000000;
        border-radius: 2px;
        cursor: pointer;
        opacity: 50%;

    }
    #custom-button:hover {
        text-decoration: underline;
    }

    #custom-text {
        margin-left: 10px;
        font-family: sans-serif;
        color: #aaa;
    }

</style>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<h2 style="margin-left: 810px;">Modos de jogo</h2>
<br>
<section class="section-background">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="courses-thumb courses-thumb-secondary">

                    <div style="margin-left: 520px;" class="courses-detail">
                        <h3 style="margin-left: 10px"><a href="treinofile.php">Documentos de texto</a></h3>
                        <div class="courses-top">
                            <div class="courses-image">
                                <a href="treinofile.php">   <img width="250px" height="230px" src="images/gonganong.png" alt=""></a>
                            </div>
                        </div>
                        <br><p></p>
                    </div>
                </div>
            </div>








        </div>
    </div>
</section>


<h2 style="margin-left: 810px;">Utilizadores</h2>
<br>
<section class="section-background">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="courses-thumb courses-thumb-secondary">

                    <div style="margin-left: 510px;" class="courses-detail">

                        <div class="courses-top">
                            <div style="margin-left: 20px" class="courses-image">
                                <a href="usersBackoffice.php"><img width="250px" height="230px" src="images/boss.png" alt=""></a>
                            </div>
                        </div>
                        <br><p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
<?php bottom(); ?>
