
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<script>
    var stage=1;
</script>
<div class="score" style="color: #FFFFFF">
    <span style="font-size: 40px">Pontos:&nbsp;</span><span id="scorePts" class="ml-1 display-4">0</span><br><br>
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
    sorteiaPalavra(nPalavras);
</script>

<body >
<h1> <span id="palavra" style="color:navajowhite; user-select: none" ></span></h1>


</body>

<!--******************************-->

<div style="padding-top: 60px; user-select: none">
    <a  class="button big" onclick="novaPalavra(document.getElementById('palavra').innerHTML);sorteiaPalavra(nPalavras);" id="novo">NOVO</a>
    <a  class="button big" onclick="repetidaPalavra(document.getElementById('palavra').innerHTML);sorteiaPalavra(nPalavras);" id="velho">VISTO</a>

</div>

<div id="debug"></div>


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
</div>

