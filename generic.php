<?php
include_once("includes/body.inc.php");
top();

?>
<header id="header">
    <h1><a href="index.php"><img src="images/vermopreto.png"></a></h1>
    <nav id="nav">
        <ul> <a href="generic.php" ><img onclick="atualiza(0)" src="images/pt.png" style="  width:50px; height: 20px " >
                <a href="genericingles.php" ><img onclick="atualizaingles(0)" src="images/eng.png" style="width: 50px; height: 20px">

                    <li><a href="index.php" style="color: black">Página Inicial</a></li>
                    <li><a href="generic.php" style="color: black">Modos de Jogo</a></li>
                    <!--<li><a href="elements.html">Elements</a></li>-->
                    <?php if(isset($_SESSION['id'])){ ?>
                        <li><a href="perfil.php?id=<?php echo $_SESSION['id'] ?>" style="color: black"><?php echo $_SESSION['nome'] ?></a></li>
                        <li><button class="button small" style="background-color: #aaaaaa; color: #8d93a0 ; " onclick="window.location.href='logout.php'">Sair</button> </li>
                    <?php } else{ ?>
                        <li><a  ><button class="button special" onclick="document.getElementById('id01').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style=" background-color: #aaaaaa; width:auto;">Registar</button></a></li>
                        <li><a  ><button class="button special" onclick="document.getElementById('id02').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="  background-color: #aaaaaa;  width:auto;">Entrar</button></a></li>
                        <?php
                    }
                    ?>
        </ul>
    </nav>
</header>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<h2 style="margin-left: 820px;">Modos de jogo</h2>
<br>
	<section class="section-background">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="courses-thumb courses-thumb-secondary">

						<div style="margin-left: 130px;" class="courses-detail">
							<h3 style="margin-left: 27px;"><a href="infinito.php">Modo Competitivo</a></h3>
							<div class="courses-top">
								<div class="courses-image">
									<a href="infinito.php"><img src="images/trophy.png" alt=""></a>
								</div>
							</div>
							<br><p></p>
						</div>
					</div>
				</div>




				<div class="col-md-4 col-sm-4">
					<div class="courses-thumb courses-thumb-secondary">

						<div style="margin-left: 140px;" class="courses-detail">
							<h3 style="margin-left: 10px;""><a href="duelo.php">Modo Contrarrelógio</a></h3>
							<div class="courses-top">
								<div class="courses-image">
									<a href="duelo.php"><img src="images/relogi.png" alt=""></a>
								</div>
							</div>
							<br><p></p>
						</div>
					</div>
				</div>


				<div class="col-md-4 col-sm-4">
					<div class="courses-thumb courses-thumb-secondary">

						<div style="margin-left: 130px;" class="courses-detail">
							<h3 style="margin-left: 30px;"><a href="numeros.php">Modo Numérico</a></h3>
							<div class="courses-top">
								<div class="courses-image">
									<a href="numeros.php" ><img src="images/numer.png" alt=""></a>
								</div>
							</div>
							<br><p></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<br style="margin-bottom: 20px">

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