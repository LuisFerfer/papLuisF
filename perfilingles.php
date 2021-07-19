<?php
include_once("includes/bodybase.inc.php");
toping();

?>

<header id="header">
    <h1><a href="indexing.php"><img src="images/vermopreto.png"></a></h1>
    <nav id="nav">
        <ul> <a href="perfil.php?id=<?php echo $_SESSION['id'] ?>" ><img onclick="atualiza(0)" src="images/pt.png" style="  width:50px; height: 20px " >
                <a href="perfilingles.php?id=<?php echo $_SESSION['id'] ?>" ><img onclick="atualizaingles(0)" src="images/eng.png" style="width: 50px; height: 20px">

                    <li><a href="indexing.php" style="color: black">Home</a></li>
                    <li><a href="genericingles.php" style="color: black">Other Game Modes</a></li>
                    <!--<li><a href="elements.html">Elements</a></li>-->
                    <?php if(isset($_SESSION['id'])){ ?>
                        <li><a href="perfil.php?id=<?php echo $_SESSION['id'] ?>" style="color: black"><?php echo $_SESSION['nome'] ?></a></li>
                        <li><button class="button small" style="background-color: #aaaaaa; color: #8d93a0 ; " onclick="window.location.href='logout.php'">Logout</button> </li>
                    <?php } else{ ?>
                        <li><a  ><button class="button special" onclick="document.getElementById('id01').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="background-color: #aaaaaa; width:auto;">Sign up</button></a></li>
                        <li><a  ><button class="button special" onclick="document.getElementById('id02').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="background-color: #aaaaaa; width:auto;">Login</button></a></li>
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

                        <button type="button" id="custom-button" onclick="window.location.href='editarperfilingles.php?id=<?php echo $_SESSION['id'] ?>'" style="width: 120px; position: absolute; top: 270px; left: 1509px; ">Edit Profile</button>
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
    <div class="container">
        <div class="table-wrapper">
            <table>
                <thead>
                <td style="font-size: 25px;font-weight: bold">Personal Highscores</td>
                </thead>
                <tbody>
                <tr>
                    <td>#</td>
                    <td>Scores</td>
                    <?php $sql="select perfilNome, topPontuacao
from tops inner join utilizadores on utilizadorId=topUtilizadorId
INNER JOIN perfis on perfilId=utilizadorId
where perfilId=".$id."
order by topPontuacao desc
limit 5";
                    $result=mysqli_query($con,$sql);
                    ?>

                    <?php
                    $pontos=0;
                    while ($dados=mysqli_fetch_array($result)){
                    $pontos+=1;
                    ?>
                <tr>
                    <td><?php echo $pontos?></td>

                    <td><?php echo $dados['topPontuacao']?></td>
                </tr>
                <?php
                }
                ?>



                </tbody>
            </table>
        </div>

</section>




<!-- Footer -->
<footer id="footer">
    <div class="container">
        <section class="links">
            <div class="align-center">
                <h3>Disclaimer</h3>
                <li>Vermo! is just an idea I had, it is not ready for professional use.</li>
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
<?php bottoming(); ?>
