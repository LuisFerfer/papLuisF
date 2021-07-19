<?php
include_once ("includes/body.inc.php");

$id=$_SESSION['id'];
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="js/jquery.min.js"></script>
<script src="js/common.js"></script>
<script>


</script>

<div class="score" style="color: #FFFFFF">

    <!--*************METER IMAGEM, DO CORAÇAOP!!!!!!!!!!!!!!!!!!!!!**********-->


    <span style="font-size: 40px; user-select: none" ><img src="images/sssss.png" style="height: 70px; width: 70px">x</span><span  id="livestext" class="ml-1 display-4">3</span>
    <span style="padding-left:10px; font-size: 40px;user-select: none">Pontos:&nbsp;</span><span id="scorePts" class="ml-1 display-4">0</span>

</div>
<br>

<!--*************PALAVRA**********-->
<?php
$i=0    ;
$handle = @fopen("palavras.txt", "r");
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
    var nPalavras=<?php echo $i?>;
    var palavras=[
        <?php
        $j=1;
        foreach ($arr as $palavra){


            if($j<$i)
                echo "'".substr($palavra,0,strlen($palavra)-2)."',"; // retira o \n das palavras
            else
                echo "'$palavra'"; // a ?ltima palavra n?o tem o \n
            $j++;
        }
        ?>
    ];


    function geraPalavrainf(nPalavras){

        n=(Math.floor(Math.random()*nPalavras));
        return(palavras[n]);

    }
    function sorteiaPalavrainf(n){
        document.getElementById("palavra").innerHTML=geraPalavrainf(n);
    }
    sorteiaPalavrainf(nPalavras);
</script>

<body >
<h1> <span id="palavra" style="color:navajowhite; user-select: none"></span></h1>


</body>

<!--******************************-->

<div style="padding-top: 60px; user-select: none">
    <script>
        let pessoa = <?php echo $id;?>;
    </script>

    <a  class="button big" onclick="novaPalavrainf(document.getElementById('palavra').innerHTML, pessoa);sorteiaPalavrainf(nPalavras);" id="novo">NOVO</a>
    <a  class="button big" onclick="repetidaPalavrainf(document.getElementById('palavra').innerHTML, pessoa);sorteiaPalavrainf(nPalavras);" id="velho">VISTO</a>

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




                    <button onclick="setTimeout(atualizainf(-1),3000)" type="button" id="eliminar"
                            class="btn btn-danger pull-right ">Voltar a Jogar
                    </button>

                </div>

            </form >
        </div>
    </div>