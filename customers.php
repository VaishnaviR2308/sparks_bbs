<!DOCTYPE html>
<html lang = "en">

	<head>
		<meta charset = "utf-8">
		<title>All Customers | BBS</title>

		<link rel = "stylesheet" type = "text/css" href = "style1.css">
		<!--<script type = "text/javascript" src = "js/script.js"></script>-->

		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">
	</head>

	<body>
		<header>
			<nav>
				<a href = "all_transactions.php">All Transactions</a>
				<a href = "#">All Customers</a>
				<a href = "index.html">Home</a>
			</nav>
		</header>

		<main>
			<h1 class = "hfont">List of all Customers</h1>
			<p class = "hfont">Please click on your name to transfer money from your account to the recipient.</p>
			
			<article class = "art_cust">
				<table class = "tcust">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email ID</th>
						<th>Available Balance</th>
					</tr>

				<?php
					include "dbconnect.php";

					$sql = "SELECT * FROM customers";

					$result = mysqli_query($conn, $sql);
					$num = mysqli_num_rows($result);

					if($num > 0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
							echo "<tr><td>" .$row['id']. "</td><td><a href = \"transfer.php?link=" .$row['name']. "\">" .$row['name']. "</td><td>" .$row['email']. "</td><td>" .$row['c_bal']. "</td></tr>";
							#echo "<button><a href = \"transfer.php?link=" .$row['name']. "\">" . $row['name'] . "</a></button><br>";
						}
					}

					mysqli_close($conn);
				?>

				</table>

			</article>
		</main>

		<footer>
			<p>Thank you for visiting!</p>
		</footer>
	</body>
</html>