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
<script>
    document.onload(duelotimer())

        function duelotimer() {
        var elem = document.getElementById("myBar");
        var width = 100;
        var id = setInterval(frame, 200);
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


</script>

<div class="row col-lg-12">

        <div class="col-lg-4">
            <h1 style="color: white; margin-left: 215px" class="float-left">Jogador 1</h1>
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
                This text is enclosed in a box.
            </div>
            <br>
            <p style="color: palegreen"></p>
            <div align="center" style="padding-top: 10px">

                <input type="text" style="width:  300px" id="caixa1" name="numeroInput">
            </div>
        </div>


        <div class="col-lg-4">
            <h1 style="color: white; margin-left: 215px" class="float-left">Jogador 2</h1>
            <br>
            <div  id="player2" class="mt-5" style="margin:auto">
                <div  id="score2"></div>
            </div>
        </div>




</div>
