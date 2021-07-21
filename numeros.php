<?php include_once("includes/body.inc.php");
top();
?>
    <header id="header">
        <h1><a href="index.php"><img src="images/vermo"></a></h1>
        <nav id="nav">
            <ul> <a href="numeros.php" ><img onclick="atualizanum(0)" src="images/pt.png" style="  width:50px; height: 20px " >
                    <a href="numeroingles.php" ><img onclick="atualizanuming(0)" src="images/eng.png" style="width: 50px; height: 20px">

                        <li><a href="index.php">Página Inicial</a></li>
                        <li><a href="generic.php">Modos de Jogo</a></li>
                        <!--<li><a href="elements.html">Elements</a></li>-->
                        <?php if(isset($_SESSION['id'])){ ?>
                            <li><a href="perfil.php?id=<?php echo $_SESSION['id'] ?>"><?php echo $_SESSION['nome'] ?></a></li>
                            <li><button class="button small" onclick="window.location.href='logout.php'">Sair</button> </li>
                        <?php } else{ ?>
                            <li><a  ><button class="button special" onclick="document.getElementById('id01').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="width:auto;">Registar</button></a></li>
                            <li><a  ><button class="button special" onclick="document.getElementById('id02').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="width:auto;">Entrar</button></a></li>
                            <?php
                        }
                        ?>
            </ul>
        </nav>
    </header>
    <script>
        var nDigitos=1;
        var nEscondido;
        var nCertos=-1;
        var stage=1;
        var tempo = 10;
        $('document').ready(function (){
            swapnum(stage);
        });
    </script>


    <!-- Banner -->
    <section id="bannernum">

    </section>


    <!-- Two -->
    <section id="two" class="wrapper style2 special">
        <div class="container">
            <header class="major">
                <h2>Vermo!</h2>

                <p>Treine o seu cérebro.</p>
            </header>

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