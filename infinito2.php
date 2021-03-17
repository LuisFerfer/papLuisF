<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="js/jquery.min.js"></script>
<script src="js/common.js"></script>
<script>


</script>

<div class="score" style="color: #FFFFFF">
    <span style="font-size: 40px" >Vidas:&nbsp;</span><span id="livestext" class="ml-1 display-4">3</span>
    <span style="padding-left:10px; font-size: 40px">Pontos:&nbsp;</span><span id="scorePts" class="ml-1 display-4">0</span>

</div>
<!-- <h1 style="color: navajowhite" ><br>vaca2<p><br></p></h1> -->

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
    var palavras=[<?php
        $j=1;
        foreach ($arr as $palavra){


            if($j<$i)
                echo "'".substr($palavra,0,strlen($palavra)-2)."',"; // retira o \n das palavras
            else
                echo "'$palavra'"; // a ?ltima palavra n?o tem o \n
            $j++;
        }
        ?>];


    function geraPalavrainf(nPalavras){

        n=(Math.floor(Math.random()*nPalavras));
        return(palavras[n]);

    }
    function sorteiaPalavrainf(n){
        document.getElementById("palavra").innerHTML=geraPalavrainf(n);
    }

</script>

<body >
<h1> <span id="palavra" style="color:navajowhite">estrela</span></h1>


</body>

<!--******************************-->

<div style="padding-top: 60px">
    <a  class="button big" onclick="novaPalavrainf(document.getElementById('palavra').innerHTML);sorteiaPalavrainf(nPalavras);debug(palavrasSaidas)" id="novo">NOVO</a>
    <a  class="button big" onclick="repetidaPalavrainf(document.getElementById('palavra').innerHTML);sorteiaPalavrainf(nPalavras);debug(palavrasSaidas);" id="velho">VISTO</a>
</div>

<div id="debug"></div>
