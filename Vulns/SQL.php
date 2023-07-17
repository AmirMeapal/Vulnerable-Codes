<?php
    include("connection.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQLi</title>
</head>
<body>
<form method="POST" action="#">
        <label for="input">Enter id of user you want to view:</label>
        <input type="text" id="input" name="id" placeholder="the user id...">
        <input type="submit" value="Submit">
    </form>
    
    <?php 
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $id = $_POST['id'];
        $query = "Select * from users where id = '$id'";
		$result = mysqli_query($con, $query);
        if($result){
            $row =  mysqli_fetch_assoc($result);
            echo "Username: " . $row['user_name'];
        }
    }

    ?>
</body>
</html>