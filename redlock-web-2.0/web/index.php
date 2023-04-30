<!DOCTYPE html>
<html>
<head>
	<title>Redlock Users Data</title>
	<style>
		table {
			font-family: Calibri, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		td, th {
			border: 3px solid ##000000;
			padding: 5px;
		}

		tr:nth-child(even){background-color: #f2f2f2;}

		tr:hover {background-color: #ddd;}

		th {
			padding-top: 10px;
			padding-bottom: 10px;
			text-align: left;
			background-color: #3333ff;
			color: white;
		}
	</style>
</head>
<body>
	<h1>Redlock User Data</h1>
	<table>
		<thead>
			<tr>
				<th>UsersID</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jabatan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// membuat koneksi ke database
            $servername = "mysql_db";
            $username = "root";
            $password = "B2502047202";
            $dbname = "Redlock";
    
            // Membuat koneksi ke database
            $conn = new mysqli($servername, $username, $password, $dbname);
    
            // Mengecek apakah koneksi berhasil
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

			$sql = "SELECT * FROM users";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo "<tr><td>" . $row["UsersID"]. "</td><td>" . $row["Nama"]. "</td><td>" . $row["Alamat"]. "</td><td>" . $row["Jabatan"]. "</td></tr>";
			    }
				echo "<tr>Jumlah User: " . $result->num_rows . "</tr>";
			} else {
			    echo "0 results";
			}
			$conn->close();
			?>
		</tbody>
	</table>
</body>
</html>

