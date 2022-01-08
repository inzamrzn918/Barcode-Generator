<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="barcode.js"></script>
    <style>
        .container{
            margin-left:10vw;
            margin-right:10vw;
            margin-top:5vh;
           
        }
        .flex{
            display:flex;
        }
        .center{
            justify-content : center;
            text-align : center;
        }
    </style>
</head>
<body class="flex">
    <div class="container center">
        <svg id="barcode"></svg>
    </div>
</body>
<script>
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        JsBarcode("#barcode", this.responseText);
    }
    xhttp.open("GET", "http://192.168.0.103/barserver/?barcode");
    xhttp.send();
</script>
</html>