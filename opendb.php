<?php
// Create connection
$conn = mysqli_connect(us-cdbr-azure-central-a.cloudapp.net,bd5ab470b5c23b,49de310d ,jackson156);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
