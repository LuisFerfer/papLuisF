<?php include_once("includes/body.inc.php");
top();
?>
<meta charset="UTF-8">

<header id="header">

    <nav id="nav">
        <ul>
            <img onclick="atualizainf(0)" src="images/pt.png" style="  width:50px; height: 20px " >
            <img onclick="atualizainfing(0)" src="images/eng.png" style="width: 50px; height: 20px">

            <li><a href="index.php">Página Inicial</a></li>
            <li><a href="generic.php">Outros Modos de Jogo</a></li>
            <!--<li><a href="elements.html">Elements</a></li>-->
            <li><a  ><button class="button special" onclick="document.getElementById('id01').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="width:auto;">Sign Up</button></a></li>
            <li><a  ><button class="button special" onclick="document.getElementById('id02').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="width:auto;">Log In</button></a></li>
        </ul>
    </nav>
</header>

<h2>Modo Competitivo</h2>
<p>Pode utilizar este modo para bater recordes pessoais ou de amigos.</p>
<p>Junte-se aos melhores na tabela de recordes!</p>
<p>Treine o seu cérebro.</p>

<ul class="actions">
    <a  class="button big" onclick="atualizainf(1)" >Começar</a>
</ul>
