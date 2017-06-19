<<<<<<< HEAD

=======
<<<<<<< HEAD
<html>
		<head>
	<title>Find a Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/custom.css" />
<link rel="stylesheet" href="themes/rasmussenthemeroller.min.css" />
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
	<body>
		<div id="page" data-role="page" data-theme="b" >
					<div data-role="header" data-theme="b">
						<h1>
					Find your contact
						</h1>	</div>
								<div data-role="content">

								<?php
								include 'config.php';
								include 'opendb.php';

								$fname = (isset($_POST['fname'])    ? $_POST['fname']   : '');
								$lname = (isset($_POST['lname'])    ? $_POST['lname']   : '');

								$sql= "SELECT id, fname, lname
								FROM customers
								WHERE fname LIKE '$fname'
								AND lname LIKE '$lname' LIMIT 1";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								    // output data of each row
								    while($row = mysqli_fetch_assoc($result)) {
												echo "ID: " . $row["id"]. "<br>";
								        echo "First Name: " . $row["fname"]. "<br>";
								        echo "Last Name: " . $row["lname"]. "<br><hr>";
								    }
								} else {
								    echo "0 results";
								}

								mysqli_close($conn);

								?>

							</div>
		</div>
				<div data-role="footer" data-theme="b">
			  <h4>Sireta Diaz &copy; 2016</h4>
			</div>
	</body>
</html>
=======
<<<<<<< HEAD
>>>>>>> b27483f2ea84f3545c7626311617dc9dd32598f4
 <?php
// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<<<<<<< HEAD
=======
=======
<?php
// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
>>>>>>> 1ebaa3be9eb2437c334b797f7e8992faa7088c00
>>>>>>> 581204e10a1a7a54824d22edb6cbfc07eda7637e
>>>>>>> b27483f2ea84f3545c7626311617dc9dd32598f4
