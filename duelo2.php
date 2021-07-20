<?php include_once("includes/body.inc.php");
top();
?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="js/jquery.min.js"></script>
<script src="js/common.js"></script>
<noscript>

    <link rel="stylesheet" href="css/style.css" />

</noscript>
<style>
    #scorebar {
        width: 65%;
        height: 20px;
        position: relative;
        background-color: #ddd;
    }

    #myBar {
        background-color: #4CAF50;
        width: 10px;
        height: 20px;
        position: absolute;
    }


    #player1 {
        width: 20px;
        height: 250px;
        position: relative;
        background-color: #00a2e8;
    }

    #score1 {
        background-color: #ddd;
        width: 20px;
        height: 10px;
        position: absolute;
    }



    #player2 {
        width: 20px;
        height: 250px;
        position: relative;
        background-color: #ed1c23;
    }

    #score2 {
        background-color: #ddd;
        width: 20px;
        height: 10px;
        position: absolute;
    }








</style>


<!-- PALAVRA -->
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
    document.onload(duelotimer())

        function duelotimer() {
        var elem = document.getElementById("myBar");
        var width = 100;
        var id = setInterval(frame, 300);
        function frame() {

        if (width == 0) {
            width=100;

    } else {
        width--;
        elem.style.width = width + '%';
    }
    }
    }


    document.onload(scoreplayer1())

    function scoreplayer1() {
        var elem = document.getElementById("score1");
        var height = 250;
        var id = setInterval(frame, 200);
        function frame() {
            if (height == 0) {
                height=250;

            } else {
                height++;
                elem.style.height = height + '%';
            }
        }
    }



    document.onload(scoreplayer2())

    function scoreplayer2() {
        var elem = document.getElementById("score2");
        var height = 250;
        var id = setInterval(frame, 200);
        function frame() {
            if (height == 0) {
                height=250;

            } else {
                height++;
                elem.style.height = height + '%';
            }
        }
    }
/*
    $(document).on("keypress","input",function (e) {
        if (e.which === 13) {
            palavra= parseInt(document.getElementById("palavra").innerHTML);
            input = parseInt(document.getElementById("input").value);


            if(palavra == input){


            }else {

            }

        }
    }); */


    var nPalavras=<?php echo $i-100?>;
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
    function geraPalavraduelo(nPalavras){

        n=(Math.floor(Math.random()*nPalavras));
        return(palavras[n]);

    }

    function sorteiaPalavraduelo(n){
        document.getElementById("palavra").innerHTML=geraPalavraduelo(n);
    }

    sorteiaPalavraduelo(nPalavras);

    $(document).on("keypress","input",function (e) {
        if (e.which === 13) {
            palavra = parseInt(document.getElementById("palavra").innerHTML);
            input = parseInt(document.getElementById("input").value);


            if(palavra == input){


            }else {

            }

        }
    });

</script>


<div class="row col-lg-12">

        <div class="col-lg-4">
            <h1 style="color: white; margin-left: 230px; " class="float-left" ><?php echo $_SESSION['nome'] ?></h1>
            <br>
            <div  id="player1" class="mt-5" style="margin:auto">
                <div  id="score1" >  </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div style="margin-left: 18%" id="scorebar">
                <div id="myBar"></div>
            </div>



            <div align="center" class="boxed">
                <p style="font-size: 50px">
                <span id="palavra" style="color:navajowhite">

        </span>
                </p>
            </div>
            <br>

            <div align="center" style="padding-top: 10px">
                <input type="text" style="width:  300px" id="input" autocomplete="off" name="wordInput" autocapitalize="none" spellcheck="false" autocorrect="off" placeholder="type the words here">

            </div>
        </div>


        <div class="col-lg-4">
            <h1 style="color: white; margin-left: 215px" class="float-left">Jogador 2</h1>
            <br>
            <div  id="player2" class="mt-5" style="margin:auto">
                <div  id="score2"></div>
            </div>
        </div>




</div> <div id="debug"></div>
