<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM XSS</title>
    <script>
        function DOM(){
            var param1 = document.getElementById("name").value;
            var mydiv = document.getElementById("result");
            mydiv.innerHTML = "Welcome " + param1 ;
           // dcoument.getElementById("result").innerHTML = "Welcome " + param1;
        }
        
    </script>
</head>
<body>
    <h1>Hello, world!</h1>
    <input type="text" id="name" placeholder="Enter your name">
    <button onclick="DOM()">Submit</button>
    <div id="result"></div>
</body>
</html>