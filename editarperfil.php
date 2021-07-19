<?php
include_once("includes/body.inc.php");
top();

?>

    <header id="header">
        <h1><a href="index.php"><img src="images/vermopreto.png"></a></h1>
        <nav id="nav">
            <ul> <a href="perfil.php?id=<?php echo $_SESSION['id'] ?>"><img onclick="atualiza(0)" src="images/pt.png" style="  width:50px; height: 20px " >
                    <a href="perfilingles.php?id=<?php echo $_SESSION['id'] ?>"><img onclick="atualizaingles(0)" src="images/eng.png" style="width: 50px; height: 20px">

                        <li><a href="index.php" style="color: black">Página Inicial</a></li>
                        <li><a href="generic.php" style="color: black">Outros Modos de Jogo</a></li>
                        <!--<li><a href="elements.html">Elements</a></li>-->
                        <?php if(isset($_SESSION['id'])){ ?>
                            <li><a href="perfil.php?id=<?php echo $_SESSION['id'] ?>" style="color: black"><?php echo $_SESSION['nome'] ?></a></li>
                            <li><button class="button small" style="background-color: #aaaaaa; color: #8d93a0 ; " onclick="window.location.href='logout.php'">Sair</button> </li>
                        <?php } else{ ?>
                            <li><a  ><button class="button special" onclick="document.getElementById('id01').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="background-color: #aaaaaa; width:auto;">Registar</button></a></li>
                            <li><a  ><button class="button special" onclick="document.getElementById('id02').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="background-color: #aaaaaa; width:auto;">Entrar</button></a></li>
                            <?php
                        }
                        ?>
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


    <div class="hero-listing set-bg" data-setbg="img/lisboa.jpg">
    </div>
    <!-- Hero Section End -->
<?php
$id = intval($_GET['id']);
$sql = "select * from perfis inner join utilizadores on perfilId=utilizadorId  where perfilId=".$_GET["id"];
$resultPerfis = mysqli_query($con, $sql);

$dadosPerfis = mysqli_fetch_array($resultPerfis)
?>
    <!-- About Secton Begin -->
    <br><br><br><br>
    <section class="about-section">
        <div class="intro-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div  class="about-intro" style="width: 1370px;height: 200px; background-image: url('<?php echo $dadosPerfis['perfilBanner']?>')" >
                            <input type="file" id="real-file" hidden="hidden" />
                            <div class="about-intro" style="position: absolute;top: 230px; left: 280px" <?php echo $dadosPerfis['perfilId'] ?>>
                                <img src="<?php echo $dadosPerfis['perfilAvatar'] ?>" class="normal" style="z-index: 3;height: 90px;width: 85px">


                            </div>
                        </div>
                        <script type="text/javascript">
                            const realFileBtn = document.getElementById("real-file");
                            const customBtn = document.getElementById("custom-button");
                            const customTxt = document.getElementById("custom-text");

                            customBtn.addEventListener("click", function () {
                                realFileBtn.click();
                            });
                        </script>
                        <div class="about-intro col-lg-6">
                            <div class="intro-text">
                                <h2 class="strokeme" style="position: absolute; top: 256px; left: 375px"><?php echo $dadosPerfis['perfilNome'] ?></h2>
                                <h4 class="strokeme" style="position: absolute; top: 290px; left: 378px"><?php echo $dadosPerfis['perfilEmail'] ?></h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <div id="titulo" style="text-align: center; width: 100%; font-weight: bold; margin-top: 2%"><h2>Edita Perfil</h2></div>
    <hr>
    <form action="confirmaeditaperfil.php?id=<?php echo $dadosPerfis['perfilId'] ?>" style="color: #FFF; margin-left: 20%; margin-top: 5%;margin-bottom: 5%; width: 50%" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label  class="badge badge-primary" style="font-size: 20px">Nome de Perfil: </label>
            <input  placeholder="<?php echo $dadosPerfis['perfilNome'] ?>" name="perfilNome" value="<?php echo $dadosPerfis['perfilNome'] ?>">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="badge badge-primary" style="font-size: 20px">Escolhe o novo avatar:</label>
            <input type="file" accept="image/*" name="perfilAvatar" src="<?php echo $dadosPerfis['perfilAvatar'] ?>" onchange="preview_image(event)">
            <div style="max-height: 100px; max-width: 100px;"></div>
            <img id="output_image" style="max-height: 90px; max-width: 85px;"/>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="badge badge-primary" style="font-size: 20px">Escolhe o novo fundo:</label>
            <input type="file" accept="image/*" name="perfilBanner" src="<?php echo $dadosPerfis['perfilBanner'] ?>" onchange="preview_image(event)">
            <div style="max-height: 100px; max-width: 100px;"></div>
            <img id="output_image" style="max-height: 200px; max-width: 1370px;"/>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="badge badge-primary" style="font-size: 20px">Endereço de Email:</label>
            <input  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="perfilEmail" value="<?php echo $dadosPerfis['perfilEmail'] ?>">

        </div>
        <br>
        <button type="submit" class="cancelbtn" style="width: 250px;">Cancelar</button>
        <button type="submit" class="cancelbtn" style="width: 250px; background-color: #4CAF50;">Editar Perfil</button>
    </form>




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