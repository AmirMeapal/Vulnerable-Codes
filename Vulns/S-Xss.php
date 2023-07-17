<?php
    include("connection.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stored XSS</title>
</head>
<body>
    <!-- Enter something -->
    <form method="POST" action="#">
        <label for="input">Enter your name:</label>
        <input type="text" id="input" name="username" placeholder="Username...">
        <input type="submit" value="Submit">
    </form>
    <!-- Enter value into DB -->
    <?php 
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $user_name = $_POST['username'];
        $query = "Insert into users (user_name) values ('$user_name')";
		$result = mysqli_query($con, $query);

    }

    ?>
    <!--Function to Show all entries -->
    <table>
		<thead>
			<tr>
				<th>DB ID</th>
				<th>Name</th>
			</tr>
		</thead>
		<tbody>
			<?php
                $query = "select * from users";
                $result = mysqli_query($con, $query);
                if ($result) {
                    while($row =  mysqli_fetch_assoc($result)){
                        $t_db_id = $row['id'];
                        $t_name = $row['user_name'];
                        echo'<tr>
                        <th scope="row">'.$t_db_id.'</th>
                        <td>'.$t_name.'</td>
                        </tr>';
                    }
                }
            ?>
            
		</tbody>
	</table>
    
</body>
</html>