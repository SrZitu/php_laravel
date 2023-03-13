<!DOCTYPE html>
<html>

<head>
	<title>User List</title>
	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container text-center">
		<h2>List of Registered Users</h2>
		<div class="row ">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Profile Picture</th>

					</tr>
				</thead>
				<tbody>
					<?php

					// Display users from CSV file
					$fp = fopen('users.csv', 'r');
					while (($data = fgetcsv($fp)) !== false) {
						echo "<tr>";
						echo "<td>" . $data[0] . "</td>";
						echo "<td>" . $data[1] . "</td>";
						echo "<td><img src='uploads/" . $data[2] . "'></td>";
						echo "</tr>";
					}
					fclose($fp);
					?>
				</tbody>
			</table>
		</div>

	</div>

</body>

</html>