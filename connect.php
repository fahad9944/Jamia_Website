<?php
$host = "localhost";
$username = "root"; 
$password = "";
$db_name = "jamiadb";
$c = mysqli_connect($host, $username, $password, $db_name)
if($c)
{
    echo "Connected successfully";
}
else
{
    echo "connection failed";
}
<?