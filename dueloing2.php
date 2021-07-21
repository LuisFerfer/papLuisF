<?php include_once("includes/bodybase.inc.php");
toping();
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
        width: 65%;
        height: 20px;
        position: relative;
        background-color: #ddd;
    }

    #score1 {
        background-color: #00a2e8;
        width: 0px;
        height: 20px;
        position: absolute;
    }


</style>


<!-- PALAVRA -->
<?php
$i=0    ;
$handle = @fopen("palavrasEN.txt", "r");
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
    let width1 = 0;
    var velocidade=100;
    var idIntervalTimer;

    function duelotimer() {
        var elem = document.getElementById("myBar");
        var width = 100;
        idIntervalTimer = setInterval(frame, velocidade);
        function frame() {
            if (width == 0) {
                $("#perdemoMsg").html("Oops! Time's up, be faster next time.");
                $("#perdemo").show();
                clearInterval(idIntervalTimer);
                clearInterval(width1);
                clearInterval(velocidade);
                //width=100;
            } else {
                width--;
                elem.style.width = width + '%';
            }
        }
    }


    function scoreplayer1() {
        var elem = document.getElementById("score1");
        var id = setInterval(frame, 200);
        function frame() {
            if (palavra == input) {
                width1 = width1 + 5;
                elem.style.width = width1 + '%';
            }
        }
    }





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
            palavra =  $('#palavra').html();
            input = this.value;


            if(palavra == input){;
                velocidade-=5;
                score++;
                $('#scorePts').html(score);
                clearInterval(idIntervalTimer);
                duelotimer();
                sorteiaPalavraduelo(nPalavras);
                $('#input').val('');
            }else {
                $("#perdemoMsg").html("Oops! You misspelled the word.");
                $("#perdemo").show();
                clearInterval(idIntervalTimer);
                clearInterval(width1);
                clearInterval(velocidade);


            }

        }
    });

    $('document').ready(function (){
        duelotimer();


        $("input:text").focus();

    })

</script>


<div style="margin-left: 33%" class="row col-lg-12">




    <div class="col-lg-4">
        <div style="margin-left: 18%" id="scorebar">
            <div id="myBar"></div>
        </div>
        <span style="padding-left:10px; font-size: 40px;user-select: none">Score:&nbsp;</span><span id="scorePts" class="ml-1 display-4">0</span>


        <div align="center" class="boxed">
            <p style="font-size: 50px">
                <span id="palavra" style="color:#ffffff">
                </span>
                </span>
            </p>
        </div>
        <br>

        <div align="center" style="padding-top: 10px">
            <input type="text" style="width:  300px" id="input" autocomplete="off" name="wordInput" autocapitalize="none" spellcheck="false" autocorrect="off" placeholder="Type your word here">

        </div>
    </div>




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




                        <button onclick="setTimeout(atualizaduelo(0),3000); window.location.reload()" type="button" id="eliminar"
                                class="btn btn-danger pull-right ">Play Again
                        </button>

                    </div>

                </form >
            </div>
        </div>
    </div>


</div> <div id="debug"></div>