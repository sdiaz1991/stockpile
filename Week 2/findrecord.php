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


               $id = (isset($_POST['id'])    ? $_POST['id']   : '');
               $ordernumber = (isset($_POST['OrdernumberID'])    ? $_POST['OrdernumberID']   : '');
               $dateofdelivery = (isset($_POST['dateofdelivery'])    ? $_POST['dateofdelivery']   : '');
				$company = (isset($_POST['CompanyID']) ? $_POST ['CompanyID'] :'');
			

// Create a connection

$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql= "SELECT id,OrdernumberID, dateofdelivery, CompanyID FROM ordernumber where ordernumber = '$Ordernumber',  dateofdelivery = '$dateofdelivery', AND companyID = '$CompanyID' LIMIT 1";

$result = mysqli_query($conn, $sql);
					
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
echo "ID: " . $row["id"]. "<br>";
echo "companyID: " . $row["CompanyID"]. "<br>";
echo "OrderDateID: " . $row["dateofdelivery"]. "<br><hr>";

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




				