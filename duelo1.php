<?php include_once("includes/body.inc.php");
top();
?>
<h2>Modo Duelo</h2>
<p>Modo multijogador</p>
<p>Escreva mais rápido que o seu oponente</p>
<p>Que vença o melhor.</p>

<ul class="actions">
    <?php if(isset($_SESSION['id'])){ ?>
    <li>
        <a  class="button big" onclick="atualizaduelo(1)">Começar</a>
    </li>
    <?php } else{ ?>
        <a  class="button big" onclick="document.getElementById('id02').style.display='block'; document.getElementById('teste001').style.overflow='hidden'">Começar</a>

        <?php
    }
    ?>
</ul>
