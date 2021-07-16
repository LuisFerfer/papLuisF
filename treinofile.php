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
<br>
<br>
<br>
<br>
<br>




<h1>Palavras em português</h1>
<?php
$myfile = fopen("palavras.txt", "r+") or die("Unable to open file!");
?>
<form action="confirmaEditaFile.php" method="post">
    <textarea name="texto"><?php echo fread($myfile,filesize("palavras.txt"));?></textarea> <br>
    <input type="submit" value="Alterar ficheiro">
</form>

<?php
fclose($myfile);
?>




<h1>Palavras em inglês</h1>
<?php
$myfile = fopen("palavrasEN.txt", "r+") or die("Unable to open file!");
?>
<form action="confirmaEditaFileEN.php" method="post">
    <textarea name="texto"><?php echo fread($myfile,filesize("palavrasEN.txt"));?></textarea> <br>
    <input type="submit" value="Alterar ficheiro">
</form>

<?php
fclose($myfile);
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
<?php bottom(); ?>

