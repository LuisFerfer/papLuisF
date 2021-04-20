<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="js/jquery.min.js"></script>
<script src="js/common.js"></script>
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
    })
    function move() {
        var elem = document.getElementById("myBar");
        var width = 100;
        var id = setInterval(frame, 10);
        function frame() {
            if (width == 0) {

                $("#magia").hide();
                $("#magiadenovo").show();
            } else {
                width--;
                elem.style.width = width + '%';
            }
        }
    }


    $(document).on("keypress","input",function (e) {

        $numb = parseInt(document.getElementById("numb").innerHTML);
        $input = parseInt(document.getElementById("input").innerHTML);
        console.log($numb);
        console.log($input);
        if (e.which === 13) {
            if($numb === $input){
                alert("work");



            }
        }
    });

</script><body >
<div  class="score" id="magia" style="color: #FFFFFF">

    <span  style="padding-left:10px; font-size: 40px">Tempo Restante:&nbsp;</span><div style="margin-left: 40%" id="myProgress">
        <div id="myBar"></div>
    </div>
    <br>

    <h1>
        <span id="numb" style="color:navajowhite">

            <?php if($jogar==true){
                $numero=rand(pow(10,$digits-1),pow(10,$digits)-1);
                echo $numero; }
            ?>

        </span>
    </h1>
</div>
<!-- <h1 style="color: navajowhite" ><br>vaca2<p><br></p></h1> -->




                                            <!--******************************-->
<div id="magiadenovo">
<span  style="padding-left:10px; font-size: 40px">Qual era o número?&nbsp;</span>
<div align="center" style="padding-top: 60px">

    <input type="text" style="width:  300px" id="input">
</div>
</div>


</body>

<!--******************************-->



<div id="debug"></div>
<script>document.onload(move())</script>