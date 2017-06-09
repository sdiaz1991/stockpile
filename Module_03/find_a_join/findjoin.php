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
</head>
	<body>
		<div id="page" data-role="page" data-theme="b" >
	<div data-role="header" data-theme="b">
<h1>
	Find a record
		</h1>	</div>
				<div data-role="content">
	<?php

			include 'config.php';
			include 'opendb.php';


			$companyid = (isset($_POST['companyid'])    ? $_POST['companyid']   : '');

			$sql= "SELECT company.companyid, company.address, company.city, company.zip, ordernumber.ordernumberid, ordernumber.dateofdelivery
					FROM company
					JOIN ordernumber on company.companyid = ordernumber.companyid2
					WHERE companyid LIKE '$companyid' LIMIT 1";

			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows ($result) > 0) {
				//output data of each row
				while ($row = mysqli_fetch_assoc ($result)) {
					echo "Company: " . $row["companyid"]. "<br>";
					echo "address: " . $row["address"]. "<br>";
					echo "city:    " . $row["city"]. "<br>";
					echo "zip:     "  .$row["zip"]. "<br>";
					echo "Ordernumber: " $row["ordernumberid"]. "<br>";
					echo "dateofdelivery: " $row["dateofdelivery"]. "<br>";
					}
				} else {
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
