<?php
 include("connection.php"); 

 if(isset($_POST["id"]) ){
$id = $_POST['id'];

$query = "select * from users WHERE id = '$id' limit 1";
$result = mysqli_query($con, $query);

if ($result->num_rows > 0) {
    echo "User exists!";
} else {
    echo "Invalid user ID";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="#">
    <p><label for="ID">User ID:</label><br />
    <input type="text" id="id" name="id"></p>
    </form>
</body>
</html>