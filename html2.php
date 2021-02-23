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
$txt=file_get_contents("..\papLuis\palavras.txt");
$i=0;
$handle = @fopen("..\papLuis\palavras.txt", "r");
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
                echo "'$palavra'"; // a �ltima palavra n�o tem o \n
            $j++;
        }
        ?>];


    function geraPalavra(n){

        n=(Math.floor(Math.random()*nPalavras));
        return(palavras[n]);

    }


</script>

<body >
<h1> <span id="palavra" style="color:navajowhite">Ferrovia</span></h1>


</body>

<!--******************************-->

<div style="padding-top: 60px">
    <a  class="button big" onclick="novaPalavra();" id="novo">NOVO</a>
    <a  class="button big" onclick="repetidaPalavra();" id="velho">VISTO</a>
</div>


