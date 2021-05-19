<?php include_once("includes/body.inc.php");
top();
?>
    <header id="header">
        <h1><a href="index.php"><img src="images/vermo"></a></h1>
        <nav id="nav">
            <ul>
                <img onclick="atualiza(0)" src="images/pt.png" style="  width:50px; height: 20px " >
                <img onclick="atualizaingles(0)" src="images/eng.png" style="width: 50px; height: 20px">

                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="generic.php">Outros Modos de Jogo</a></li>
                <!--<li><a href="elements.html">Elements</a></li>-->
                <li><a  ><button class="button special" onclick="document.getElementById('id01').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="width:auto;">Sign Up</button></a></li>
                <li><a  ><button class="button special" onclick="document.getElementById('id02').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="width:auto;">Log In</button></a></li>
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

<?php bottom(); ?>