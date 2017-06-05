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


               $Ordernumber = (isset($_POST['OrdernumberID'])    ? $_POST['OrdernumberID']   : '');
               $dataofdelivery = (isset($_POST['dataofdelivery'])    ? $_POST['dataofdelivery']   : '');
               $Company = (isset($_POST['CompanyID'])    ? $_POST['CompanyID']   : '');

// Create a connection

$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

<<<<<<< HEAD:Week 2/findrecord.php
$sql= "SELECT id,OrdernumberID, dateofdelivery,companyID FROM ordernumber where OrdernumberID = '$OrdernumberID' dateofdelivery = $'dateofdelivery' AND CompanyID = '$CompanyID' LIMIT 1";
=======
<<<<<<< HEAD:Week 2/findrecord.php
$sql= "SELECT id,fname,lname,date FROM ordernumber WHERE fname='$fname',lname='$lname' AND date ='$date'  LIMIT 1";
=======
$sql= "SELECT id,fname, lname, date FROM ordernumber where fname = '$fname' AND lname = '$lname' AND date = '$date' LIMIT 1";
>>>>>>> 1ebaa3be9eb2437c334b797f7e8992faa7088c00:find_a_record/findrecord.php
>>>>>>> be7674a2cc0ca6984db4dcee3ff384b9810814ff:Week 2/findrecord.php
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
<<<<<<< HEAD:Week 2/findrecord.php
        echo "<b>id: " . $row["id"]. "</b>";
        echo "<b>Name: " . $row["fname"]. " " . $row["lname"]. "</b>";
        echo "<b>Ordernumber: " . $row["date"]. "</b><br>";
=======
        echo "<b>id: " . $row["id"]. "</b><br>";
<<<<<<< HEAD:Week 2/findrecord.php
        echo "<b>Ordernumber: " . $row["OrdernumberID"]. " " . $row["dataofdelivery"]. "</b><br>";
        echo "<b>Company: " . $row["CompanyID"]. "</b><br>";
=======
        echo "<b>Name: " . $row["fname"]. " " . $row["lname"]. "</b><br>";
        echo "<b>date: " . $row["date"]. "</b><br>";
>>>>>>> 1ebaa3be9eb2437c334b797f7e8992faa7088c00:find_a_record/findrecord.php
>>>>>>> be7674a2cc0ca6984db4dcee3ff384b9810814ff:Week 2/findrecord.php
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