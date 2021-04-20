<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="js/jquery.min.js"></script>
<script src="js/common.js"></script>
<noscript>

    <link rel="stylesheet" href="css/style.css" />

</noscript>
<style>
    #scorebar {
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
<script>
    document.onload(duelotimer())

        function duelotimer() {
        var elem = document.getElementById("myBar");
        var width = 100;
        var id = setInterval(frame, 75);
        function frame() {
        if (width == 0) {
width=100;

    } else {
        width--;
        elem.style.width = width + '%';
    }
    }
    }

</script>

<div >


        <h1 style="color: white">Jogador 1</h1>

    <div style="margin-left: 40%" id="scorebar">
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
