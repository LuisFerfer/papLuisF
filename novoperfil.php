<?php
include_once("includes/body.inc.php");
top();

?>
<header id="header">
    <h1><a href="index.php"><img src="images/vermo"></a></h1>
    <nav id="nav">
        <ul> <a href="index.php" ><img onclick="atualiza(0)" src="images/pt.png" style="  width:50px; height: 20px " >
                <a href="indexing.php" ><img onclick="atualizaingles(0)" src="images/eng.png" style="width: 50px; height: 20px">

                    <li><a href="index.php">Página Inicial</a></li>
                    <li><a href="generic.php">Outros Modos de Jogo</a></li>
                    <!--<li><a href="elements.html">Elements</a></li>-->
                    <li><a  ><button class="button special" onclick="document.getElementById('id01').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="width:auto;">Sign Up</button></a></li>
                    <li><a  ><button class="button special" onclick="document.getElementById('id02').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="width:auto;">Log In</button></a></li>
        </ul>
    </nav>
</header>

<div class="hero-listing set-bg" data-setbg="img/lisboa.jpg">
</div>
<!-- Hero Section End -->
<?php
$id = intval($_GET['id']);
$sql = "select * from utilizadores where utilizadorId=" . $id;
$resultPerfis = mysqli_query($con, $sql);
$dadosPerfis = mysqli_fetch_array($resultPerfis)
?>
<!-- About Secton Begin -->
<section class="about-section">
    <div class="intro-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="about-intro" <?php echo $dadosPerfis['utilizadorId'] ?>>
                        <img src="<?php echo $dadosPerfis['utilizadorAvatar'] ?>" class="normal">
                    </div>
                </div>
                <div class="about-intro col-lg-6">
                    <div class="intro-text ">
                        <h2><?php echo $dadosPerfis['utilizadorNome'] ?></h2>
                        <h4><?php echo $dadosPerfis['utilizadorEmail'] ?></h4>
                    </div>

                    <?php
                    ?>


                </div>
                <?php
                if (isset ($_SESSION['id'])) {
                    $idUti = $_SESSION['id'];
                    $con = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
                    $sql = "select * from perfis where perfilId=" . $idUti;
                    $resultPerfis = mysqli_query($con, $sql);
                    $dadosPerfis = mysqli_fetch_array($resultPerfis);
                    if ($_SESSION['id'] == $id or $dadosPerfis['perfilAdmin'] == "admin") {


                        ?>
                        <div class="col-lg-4 ">
                            <div class="intro-share">
                                <div class="share-btn">
                                    <?php
                                    if ($_SESSION['id'] == $id) {
                                        ?>
                                        <a href="DefPerfil.php?id=<?php echo $dadosPerfis['perfilId'] ?>">Definições</a>
                                        <?php
                                    }
                                    ?>
                                    <a href="listaReserva.php?id=<?php echo $id ?>">Ver
                                        Reservas</a>
                                    <?php
                                    if ($_SESSION['id'] == $id) {
                                        ?>
                                        <a class="mt-2"
                                           href="criarEstabelecimento.php?id=<?php echo $dadosPerfis['perfilId'] ?>">Criar
                                            Estabelecimento</a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    } else {
                        ?>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="about-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-left">
                        <div class="client-reviews">
                            <h3>Comentários Feitos</h3>
                            <?php
                            $sql = "select * from comentarios inner join perfis on perfilId=comentarioPerfilId 
                                                             inner join estabelecimentos on estabelecimentoId=comentarioEstabelecimentoId 
                                                            where perfilId=$id";

                            $resultRedes = mysqli_query($con, $sql);

                            $sqlRating = "select * from redes inner join ratings on redeId=ratingRedeId
                                                             inner join perfis on perfilId=redePerfilId 
                                                             inner join estabelecimentos on estabelecimentoId=redeEstabelecimentoId 
                                                            where perfilId=$id and redeTipo='rating'";
                            $resultRating = mysqli_query($con, $sqlRating);

                            ?>
                            <div class="reviews-item">
                                <div class="rating">
                                    <?php
                                    while ($dadosRedes = mysqli_fetch_array($resultRedes)) {
                                        ?>
                                        <h5>
                                            <a href="single-listing.php?id=<?php echo $dadosRedes['estabelecimentoId'] ?> "> <?php echo $dadosRedes['estabelecimentoNome'] ?>
                                        </h5>
                                        <p><?php echo $dadosRedes['comentarioTexto'] ?></p></a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-left">
                        <div class="client-reviews">
                            <h3>Ratings Feitos</h3>
                            <?php
                            $sql = "select * from comentarios inner join perfis on perfilId=comentarioPerfilId 
                                                             inner join estabelecimentos on estabelecimentoId=comentarioEstabelecimentoId 
                                                            where perfilId=$id";

                            $resultRedes = mysqli_query($con, $sql);

                            $sqlRating = "select * from redes inner join ratings on redeId=ratingRedeId
                                                             inner join perfis on perfilId=redePerfilId 
                                                             inner join estabelecimentos on estabelecimentoId=redeEstabelecimentoId 
                                                            where perfilId=$id and redeTipo='rating'";
                            $resultRating = mysqli_query($con, $sqlRating);

                            ?>
                            <div class="reviews-item">
                                <div class="rating">
                                    <?php
                                    while ($dadosRedes = mysqli_fetch_array($resultRedes)) {
                                        ?>
                                        <h5 class="mt-2"><a
                                                    href="single-listing.php?id=<?php echo $dadosRedes['estabelecimentoId'] ?> "> <?php echo $dadosRedes['estabelecimentoNome'] ?></a>
                                        </h5>
                                        <?php
                                        $dadosRating = mysqli_fetch_array($resultRating);
                                        for ($i = 1; $i <= $dadosRating['ratingValor']; $i++) {
                                            ?>
                                            <i class="fa fa-star"> </i>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
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
