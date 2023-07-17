<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OS command injection</title>
</head>
<body>
<form action="#" method="POST">
<p>
<label for="host">Lookup:</label>
<input type="text" id="host" name="host" placeholder="www.google.com">
<button type="submit" name="form" value="submit">Begin Lookup</button>
</p>
</form>
<?php

if(isset($_POST["host"]))
{

$command = $_POST["host"];

if($command == "")
{
    echo "Enter a domain name...";
}

else
{
    $output = shell_exec("nslookup " . $command);
    echo "<p>$output</p>";
}

}

?>
</body>
</html>