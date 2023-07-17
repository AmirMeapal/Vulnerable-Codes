
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reflected XSS</title>
</head>
<body>
<p>Enter your first and last name:</p>

<form action="#" method="GET">

    <p><label for="firstname">First name:</label><br />
    <input type="text" id="firstname" name="firstname"></p>

    <p><label for="lastname">Last name:</label><br />
    <input type="text" id="lastname" name="lastname"></p>

    <button type="submit" name="form" value="submit">Go</button>  

</form>

<br />

<?php

if(isset($_GET["firstname"]) && isset($_GET["lastname"]))
{   

    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];    

    if($firstname == "" or $lastname == "")
    {

        echo "<p>Please enter both fields!</p>";       

    }

    else            
    { 

        echo "Hello,  " . $firstname . " " . $lastname;   

    }

}

?>

</div>
</body>
</html>