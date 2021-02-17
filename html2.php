<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="js/jquery.min.js"></script>
<script src="js/common.js"></script>
<script>

    $('document').ready(function(){
        playGame(true);
        var el = document.getElementById("novo");
        var el2 = document.getElementById("velho");
        el.addEventListener("click", novaImagem, false);
        el2.addEventListener("click", repetidaImagem, false);
    })
</script>

<div class="score" style="color: #FFFFFF">
    <span style="font-size: 40px">Pontos:&nbsp;</span><span id="scorePts" class="ml-1 display-4">0</span>
    <span style="padding-left: 50px; font-size: 40px" >Nível:&nbsp;</span><span id="nivelNum" class="ml-1 display-4">1</span>
</div>
<!-- <h1 style="color: navajowhite" ><br>vaca2<p><br></p></h1> -->

<!--*************PALAVRA**********-->
<div id="picture" style="padding-top: 30px; font-size: 50px">
Palavra
</div>
<!--******************************-->

<div style="padding-top: 60px">
    <a  class="button big" id="novo">NOVO</a>
    <a  class="button big" id="velho">VISTO</a>
</div>


<div class="modal fade" id="mensagem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">JOGO do AFONSO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center " id="corpoMensagem">
                PARABÉNS!<br>
                Acertaste em <span style="font-weight: bold" id="msgPts" class="text-xl-center"></span> imagens.
                <div id="novoNivel"></div>

            </div>
            <div class="modal-footer">
                <button onclick="playGame()" type="button" class=" float-right btn btn-success" data-dismiss="modal">Jogar</button>
            </div>
        </div>
    </div>
</div>