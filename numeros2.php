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
    function move() {
        var elem = document.getElementById("myBar");
        var width = 100;
        var id = setInterval(frame, 10);
        function frame() {
            if (width == 0) {
                clearInterval(id);
                atualizanum(1);
            } else {
                width--;
                elem.style.width = width + '%';
            }
        }
    }
</script><body >
<div  class="score" style="color: #FFFFFF">

    <span  style="padding-left:10px; font-size: 40px">Tempo Restante:&nbsp;</span><div style="margin-left: 40%" id="myProgress">
        <div id="myBar"></div>
    </div>

</div>
<!-- <h1 style="color: navajowhite" ><br>vaca2<p><br></p></h1> -->






<br>

    <h1>
        <span  style="color:navajowhite">

            <?php if($jogar==true){
            $numero=rand(pow(10,$digits-1),pow(10,$digits)-1);
             echo $numero; }
             ?>
            <input type="hidden" name="id" value="<?php echo $numero?>">
        </span>
    </h1>


</body>

<!--******************************-->



<div id="debug"></div>
<script>document.onload(move())</script>