<?php
if (isset($_POST['url'])) {
    $url = $_POST['url'];

    if ($url) {
            echo file_get_contents($url);
    } else {
        echo "Unable to open the URL.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>SSRF</title>
</head>

<body>
    <h1>Read URL</h1>

    <form method="POST" action="#">
        <label for="url">Enter a URL:</label>
        <input type="text" name="url">
        <input type="submit" value="submit">
    </form>
    <!-- This code is vulnerable to SSRF because it allows the user to 
    specify the URL that is used to read the file. This could allow the 
    user to read files from other websites or systems, which could be 
    used to steal sensitive information or launch attacks. -->
</body>

</html>