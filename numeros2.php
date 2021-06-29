<?php

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
        nEscondido=Math.pow(10,nDigitos-1)+parseInt(Math.random()*(Math.pow(10,nDigitos)-Math.pow(10,nDigitos-1)));
          //  console.log("digitos: " + nDigitos++);
         // console.log("escondido: " + nEscondido);
          // console.log("Certos: " + nCertos);
        nDigitos++;
        tempo = tempo + 5;
        $('#numb').html(nEscondido);
    })
    function move() {
        let elem = document.getElementById("myBar");
        let width = 100;
        var id = setInterval(frame, tempo);
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

    $(document).ready(function (){
        nCertos++;
    })

    $(document).on("keypress","input",function (e) {
        if (e.which === 13) {
            numb = parseInt(document.getElementById("numb").innerHTML);
            input = parseInt(document.getElementById("input").value);


            if(numb == input){
                $('#nEscondidoG').html(nEscondido);
                $('#nTentado').html(input);
                $("#magiadenovo").hide();
                $("#magiaagain").show();

            }else {
                $('#nEscondidoP').html(nEscondido);
                $("#magiadenovo").hide();
                $("#magiaagainperdeu").show();
                $('#nCertos').html(nCertos);
                $('#nTentado').html(input);
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
        <span id="numb" style="color:navajowhite; user-select: none">

<br>

        </span>
    </p>
</div>
<!-- <h1 style="color: navajowhite" ><br>vaca2<p><br></p></h1> -->



<!--******************************-->
<div id="magiadenovo" >
    <span  style="padding-left:10px; font-size: 40px">Qual era o número?&nbsp;</span>
    <div align="center" style="padding-top: 60px">

        <input type="text" style="width:  300px" id="input" autofocus>
    </div>
</div>





<div id="magiaagain">
    <p  style="padding-left:10px; font-size: 40px">Acertou! </p>
    <p  style="padding-left:10px; font-size: 40px">O numero que apareceu foi : <span id="nEscondidoG"></span></p>
    <a  class="button big" onclick="atualizanum(0);">Continuar</a>
</div>

<div id="magiaagainperdeu">
    <b><p  style="color: indianred;padding-left:10px; font-size: 40px">Perdeu!</p></b><br>
    <p  style="padding-left:10px; font-size: 40px">O numero era : <span id="nEscondidoP"></span></p>
    <p  style="padding-left:10px; font-size: 40px">O seu numero foi : <span id="nTentado"></span></p>
    <p  style="padding-left:10px; font-size: 40px">Acertou <span id="nCertos"></span> número(s) seguido(s)</p>
    <a  class="button big" style="background-color: indianred" onclick="location.reload()">Recomeçar</a>
</div>

</body>

<!--******************************-->



<div id="debug"></div>
<script>$(document).ready(move())</script>