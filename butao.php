<html>
<head>
    <style>


        #custom-button{
            padding: 10px;
            color: white;
            background-color: white;
            border: 1px solid #000000;
            border-radius: 5px;
            cursor: pointer;
            opacity: 70%;

        }
        #custom-button:hover {
            background-color: #8d93a0;
        }

        #custom-text {
            margin-left: 10px;
            font-family: sans-serif;
            color: #aaa;
        }


    </style>
</head>
<body>
<input type="file" id="real-file" hidden="hidden"/>
<button type="button" id="custom-button">Choose a file</button>
<span id="custom-text">No file chosen,yet.</span>

<script type="text/javascript">
    const realFileBtn = document.getElementById("real-file");
    const customBtn = document.getElementById("custom-button");
    const customTxt = document.getElementById("custom-text");

    customBtn.addEventListener("click", function () {
        realFileBtn.click();
    });
</script>
</body>








</html>