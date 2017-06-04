<html>
		<head>
	<title>Find a record</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/custom.css" />
<link rel="stylesheet" href="themes/rasmussenthemeroller.min.css" />
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="javascript/storage.js"></script>
</head>
	<body>
		<div id="page" data-role="page" data-theme="b" >
	<div data-role="header" data-theme="b">
<h1>
	Find a record
		</h1>	</div>
				<div data-role="content">
	<?php
$servername = "us-cdbr-azure-central-a.cloudapp.net";
$username = "bd5ab470b5c23b";
$password = "49de310d";
$dbname = "jackson156";


               $Customers = (isset($_POST['Customers'])    ? $_POST['Customers']   : '');
               $Ordernumber = (isset($_POST['Ordernumber'])    ? $_POST['Ordernumber']   : '');
               $Orderdate = (isset($_POST['Orderdate'])    ? $_POST['Orderdate']   : '');

// Create a connection

$conn = mysqli_connect(us-cdbr-azure-central-a.cloudapp.net,bd5ab470b5c23b, 49de310d, jackson156);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql= "SELECT id,fname,lname,date FROM ordernumber WHERE fname='$fname',lname='$lname' AND date ='$date'  LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<b>id: " . $row["id"]. "</b>";
        echo "<b>Name: " . $row["fname"]. " " . $row["lname"]. "</b>";
        echo "<b>Ordernumber: " . $row["date"]. "</b><br>";
    }
} else {
    echo "Sorry there are no matches! Please check your entry and try again.";
}

mysqli_close($conn);

?>



				<div data-role="footer" data-theme="b">
	  <h4>YOUR APP NAME &copy; 2016</h4>
	</div>
	</body>
</html>