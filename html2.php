<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="js/jquery.min.js"></script>
<script src="js/common.js"></script>
<script>


</script>

<div class="score" style="color: #FFFFFF">
    <span style="font-size: 40px">Pontos:&nbsp;</span><span id="scorePts" class="ml-1 display-4">0</span>
    <!-- <span style="padding-left: 50px; font-size: 40px" >Nível:&nbsp;</span><span id="nivelNum" class="ml-1 display-4">1</span>-->
</div>
<!-- <h1 style="color: navajowhite" ><br>vaca2<p><br></p></h1> -->

<!--*************PALAVRA**********-->
<?php
$i=0    ;
$handle = @fopen("palavras.txt", "r"); // numa versão posterior vem da Base de dados
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        $arr[$i++]=$buffer;
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}


?>

<script>
    var nPalavras=<?php echo $i-100?>;
    var palavras=[
        <?php
        $j=1;
        foreach ($arr as $palavra){


            if($j<$i)
                echo "'".substr($palavra,0,strlen($palavra)-2)."',"; // retira o \n das palavras
            else
                echo "'$palavra'"; // a �ltima palavra n�o tem o \n
            $j++;
        }
        ?>
    ];


    function geraPalavra(nPalavras){

        n=(Math.floor(Math.random()*nPalavras));
        return(palavras[n]);

    }

    function sorteiaPalavra(n){
        document.getElementById("palavra").innerHTML=geraPalavra(n);
    }

</script>

<body >
<h1> <span id="palavra" style="color:navajowhite" >cassete</span></h1>


</body>

<!--******************************-->

<div style="padding-top: 60px">
    <a  class="button big" onclick="novaPalavra(document.getElementById('palavra').innerHTML);sorteiaPalavra(nPalavras);debug(palavrasSaidas)" id="novo">NOVO</a>
    <a  class="button big" onclick="repetidaPalavra(document.getElementById('palavra').innerHTML);sorteiaPalavra(nPalavras);debug(palavrasSaidas);" id="velho">VISTO</a>
</div>

<div id="debug"></div>


<div class="modal fade" id="perdemo" data-backdrop="static" data-keyboard="false" tabindex="-1"
     aria-labelledby="perdemoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class=contact-form method=post enctype=multipart/form-data>

                <div class="modal-header">
                    <h5 class="modal-title" id="perdemoLabel">Perdeste</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <span id="perdemoMsg"></span>

                </div>
                <div class="modal-footer">
                    <div class="col-lg-7 meio">
                        <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Fechar</button>
                    </div>
                    <div class="col-lg-5 meio">
                        <button onclick="setTimeout(atualiza(-1),3000)" type="button" id="eliminar"
                                class="btn btn-danger pull-right ">Voltar a Jogar
                        </button>
                    </div>
                </div>
        </div>
        </form >
    </div>
</div>