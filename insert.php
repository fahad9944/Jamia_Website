<?php
include 'connect.php';
$fn = $_POST['first_name'];
$ln = $_POST['last_name'];
$email = $_POST['email_address'];
$msg = $_POST['message'];
$by = $_POST['written_by'];
$in = "INSERT INTO `tblcontact`( `First_name`, `Last_name`, `Email_address`, `Message`, `Written_by`) VALUES ('$fn','$ln','$email','$msg','$by')";
$query = mysqli_query($c, $in);

if($query)
{
    echo "<br> Inserted successfully";
}
else
{
    echo "<br> Failed to insert <br>". mysqli_error($c);
}
?>