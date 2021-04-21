
<?php
$digits=1;
$jogar=true;
?>
<style>
    #myProgress {
        width: 20%;
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
</style>




<br>


<script>
    $(document).ready(function (){
        $("#magiadenovo").hide();
        $("#magiaagain").hide();
        $("#magiaagainperdeu").hide();
    })
    function move() {
        let elem = document.getElementById("myBar");
        let width = 100;
        var id = setInterval(frame, 70);
        function frame() {
            if (width == 0) {

                clearInterval(id);
                $("#magia").hide();
                $("#magiadenovo").show();
            } else {
                width--;
                elem.style.width = width + '%';
            }
        }
    }


    $(document).on("keypress","input",function (e) {
        if (e.which === 13) {
            $numb = parseInt(document.getElementById("numb").innerHTML);
            $input = parseInt(document.getElementById("input").value);
            if($numb == $input){
                $("#magiadenovo").hide();
                $("#magiaagain").show();
            }else {
                $("#magiadenovo").hide();
                $("#magiaagainperdeu").show();
            }

        }
    });

</script><body>
<div  class="score" id="magia" style="color: #FFFFFF">

    <span  style="padding-left:10px; font-size: 40px">Tempo Restante:&nbsp;</span><div style="margin-left: 40%" id="myProgress">
        <div id="myBar"></div>
    </div>
    <br>

    <p style="font-size: 50px">
        <span id="numb" style="color:navajowhite">

            <?php if($jogar==true){
                $numero=rand(pow(10,$digits-1),pow(10,$digits)-1);
                echo $numero;
            }
            ?>

        </span>
    </p>
</div>
<!-- <h1 style="color: navajowhite" ><br>vaca2<p><br></p></h1> -->




                                            <!--******************************-->
<div id="magiadenovo">
<span  style="padding-left:10px; font-size: 40px">Qual era o número?&nbsp;</span>
<div align="center" style="padding-top: 60px">

    <input type="text" style="width:  300px" id="input">
</div>
</div>





<div id="magiaagain">
    <p  style="padding-left:10px; font-size: 40px">O numero que apareceu foi : <?php echo $numero; ?></p>
    <p  style="padding-left:10px; font-size: 40px">O seu numero foi : <?php echo $numero; ?></p>
    <a  class="button big" onclick="atualizanum(0);">Continuar</a>
</div>

<div id="magiaagainperdeu">
    <b><p  style="color: indianred;padding-left:10px; font-size: 40px">Perdeu!</p></b>
    <p  style="padding-left:10px; font-size: 40px">O numero era : <?php echo $numero; ?></p>
</div>

</body>

<!--******************************-->



<div id="debug"></div>
<script>$(document).ready(move())</script>