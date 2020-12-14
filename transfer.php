<!DOCTYPE html>
<html lang = "en">

	<head>
		<meta charset = "utf-8">
		<title>Transfer Money | BBS</title>

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
			<h1 class = "hfont">Transfer Money</h1>
			
			<article class = "art_transfer">
				<form action = "add_trans.php" method = "POST"> 

					<label for = "from_user">From:</label>
					<br>
					<input type="text" name="from_user" id = "from_user" class = "inputs"
						<?php
							$nm = $_REQUEST['link'];
							echo "value = '" .$nm. "'";
						?>
					readonly>

					</select>
					<br><br>

					<label for = "to_user">To:</label>
					<br>
					<select id = "to_user" name = "to_user" class = "inputs">
						<option value = "null">Select a customer</option>
						
						<?php
							include "dbconnect.php";
							
							$sql = "SELECT name FROM customers";
							
							$result = mysqli_query($conn, $sql);
							$num = mysqli_num_rows($result);
     					
     					while ($row = mysqli_fetch_assoc($result))
     					{
     						if($_REQUEST['link'] != $row['name'])
     							echo "<option value=\"" .$row['name']. "\">" .$row['name']. "</option>";
    					}

    					$conn->close();
						?>

					</select>
					<br><br>

					<label for = "amount">Amount:</label>
					<br>
					<input type = "number" name="amount" id = "amount" min = "1" class = "inputs">
					<br><br>

					<input type = "submit" name = "transfer" class = "inputs" id = "transfer_button" value = "Transfer">

				</form>
			</article>
		</main>

		<footer>
			<p>Thank you for visiting!</p>
		</footer>

	</body>
</html>