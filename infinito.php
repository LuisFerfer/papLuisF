<?php include_once("includes/body.inc.php");
top();
?>
    <script>
        var stage=1;
        $('document').ready(function (){
            swapinf(stage);
        });
    </script>
    <header id="header">
        <h1><a href="index.php"><img src="images/vermo"></a></h1>
        <nav id="nav">
            <ul> <a href="infinito.php" ><img onclick="atualizainf(0)" src="images/pt.png" style="  width:50px; height: 20px " >
                    <a href="infinitoing.php" ><img onclick="atualizainfing(0)" src="images/eng.png" style="width: 50px; height: 20px">

                        <li><a href="index.php">Página Inicial</a></li>
                        <li><a href="generic.php">Outros Modos de Jogo</a></li>
                        <!--<li><a href="elements.html">Elements</a></li>-->
                        <li><a  ><button class="button special" onclick="document.getElementById('id01').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="width:auto;">Registar</button></a></li>
                        <li><a  ><button class="button special" onclick="document.getElementById('id02').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="width:auto;">Entrar</button></a></li>
            </ul>
        </nav>
    </header>

<!-- Banner -->
<section id="bannerinf">


</section>

<!-- One -->
<section id="one" class="wrapper style1 special">
    <div class="container">
        <header class="major">
            <h2>Recordes</h2>
            <p>Aqui poderá ver os seus últimos melhores resultados.</p>
        </header>
        <section>


            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>0</td>
                    </tr>
                    </tbody>

                </table>
            </div>
            <!-- Two -->
            <section id="two" class="wrapper style2 special">
                <div class="container">
                    <header class="major">
                        <h2>Vermo!</h2>
                        <p>Treine o seu cérebro.</p>
                    </header>

                </div>
            </section>
        </section>
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

    <div class="modal" id="perdemo" >
        <div class="modal-dialog">
            <div class="modal-content">
                <form class=contact-form method=post enctype=multipart/form-data>

                    <div class="modal-header">
                        <h4 class="modal-title" id="perdemoLabel">Oops!</h4>
                        <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div> --></div>
                    <div class="modal-body">

                        <span style="color: black" id="perdemoMsg"></span>

                    </div>
                    <div class="modal-footer ">




                        <button onclick="setTimeout(atualiza(0),3000)" type="button" id="eliminar"
                                class="btn btn-danger pull-right ">Voltar a Jogar
                        </button>

                    </div>

                </form >
            </div>
        </div>



<?php bottom(); ?>