<!DOCTYPE html>
<html>
<head>
	<title>Redlock User Database</title>
	<style>
		.header {
			background-color: pink;
			color: white;
			padding: 12px;
			text-align: center;
		}

		.row {
			border: 1px solid #ddd;
			background-color: #f2f2f2;
			padding: 8px;
		}
	</style>
</head>
<body>
	<div class="header">
		<h1>Redlock User Database</h1>
	</div>
	
	<div style="display: flex; flex-direction: column; gap: 8px; padding: 8px;">
		<?php

			$servername = "redlock-database-2.0";
			$username = "root";
			$password = "yahyun";
			$dbname = "Redlock";


			$conn = new mysqli($servername, $username, $password, $dbname);

			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM users";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				echo "jumlah user : $result->num_rows ";
			    while($row = $result->fetch_assoc()) {
			        echo "<div class='row'>" . 
			             "<div>ID: " . $row["ID"] . "</div>" .
			             "<div>Nama: " . $row["Nama"] . "</div>" .
			             "<div>Alamat: " . $row["Alamat"] . "</div>" .
			             "<div>Jabatan: " . $row["Jabatan"] . "</div>" .
			             "</div>";
			    }
			} else {
			    echo "0 results";
			}
			$conn->close();
		?>
	</div>
</body>
</html>
