<?php
include 'connect.php';
$fn = $_POST['first_name'];
$ln = $_POST['last_name'];
$email = $_POST['email_address'];
$msg = $_POST['message'];
$query = mysqli_query($c, $in);
if($query)
{
    echo "Inserted successfully";
}
else
{
    echo "Failed to insert";
}
?>