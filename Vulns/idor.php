

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDOR</title>
    <style>
		table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 20px;
		}

		th, td {
			border: 1px solid #ddd;
			padding: 8px;
			text-align: left;
		}

		th {
			background-color: #f2f2f2;
		}

		tr:nth-child(even) {
			background-color: #f9f9f9;
		}

		tr:hover {
			background-color: #f5f5f5;
		}
	</style>
</head>
<body>
    <form action="#" method="POST">
        <input type="number" name="user_id" placeholder="ID...">
        <input type ="submit" value="submit">
    </form>
    <table>
		<thead>
			<tr>
				<th>Order ID</th>
				<th>Product</th>
                <th>Quantity</th>
				<th>User ID</th>
			</tr>
		</thead>
		<tbody>
   <?php
    include("connection.php"); 
    if (isset($_POST['user_id'])) {
        $user_id = $_POST['user_id'];
        $query = "Select * from sales where user_id = '$user_id'";
		$result = mysqli_query($con, $query);
        if ($result) {
            $result =  mysqli_fetch_all($result);
            
            foreach($result as $row){
                echo "<tr>";
                echo "<td>" . $row[0] . "</td>";
                echo "<td>" . $row[1] . "</td>";
                echo "<td>" . $row[2] . "</td>";
                echo "<td>" . $row[3] . "</td>";
                echo "</tr>";
            }
                
        }else{
            die("no such ID...");
        }
    }
?>
</tbody>
</body>
</html>