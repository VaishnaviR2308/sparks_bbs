<!DOCTYPE html>
<html lang = "en">

	<head>
		<meta charset = "utf-8">
		<title>All Transactions | BBS</title>

		<link rel = "stylesheet" type = "text/css" href = "style1.css">
		<!--<script type = "text/javascript" src = "js/script.js"></script>-->

		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">
	</head>

	<body>
		<header>
			<nav>
				<a href = "#">All Transactions</a>
				<a href = "customers.php">All Customers</a>
				<a href = "index.html">Home</a>
			</nav>
		</header>

		<main>
			<h1 class = "hfont">List of all Transactions</h1>
			
			<article class = "art_trans">
				
				<table class = "ttrans">
					<tr>
						<th>ID</th>
						<th>Sender</th>
						<th>Recipient</th>
						<th>Amount</th>
					</tr>

				<?php
					include "dbconnect.php";

					$sql = "SELECT * FROM transaction";

					$result = mysqli_query($conn, $sql);
					$num = mysqli_num_rows($result);

					if($num > 0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
							echo "<tr><td>" .$row['id']. "</td><td>" .$row['from_user']. "</td><td>" .$row['to_user']. "</td><td>" .$row['amount']. "</td></tr>";
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