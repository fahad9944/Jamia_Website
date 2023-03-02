<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$host = "localhost";
$username = "root"; 
$password = "";
$db_name = "jamiadb";
$c = mysqli_connect($host, $username, $password, $db_name);
if($c != true )
{
    echo "connection failed";
}


$fn = $_POST['first_name'];
$ln = $_POST['last_name'];
$email = $_POST['email_address'];
$msg = $_POST['message'];
$by = $_POST['written_by'];
$in = "INSERT INTO `tblcontact`( `first_name`, `Last_name`, `Email_address`, `Message`, `Written_by`) VALUES ('$fn','$ln','$email','$msg','$by')";
$query = mysqli_query($c, $in);


if($query == true){
    ?> 
    <script>alert (" Submit") </script>
    <?php
}   
    else{
        ?> <script>alert ("Failed To Submit")</script>
    <?php
}   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEEZABUL ULOOM</title>
    
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/contact.css">

    <!--icon-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.5/css/unicons.css">

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;0,700;1,400;1,800;1,900&display=swap" rel="stylesheet">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">



<body>

<nav>
    <div class="container nav_container">
        <a href="index.html"><h3>JAMIA MEEZABUL ULOOM</h3></a>
        <ul class="nav_menu">
            <li><a href="index.html">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="contact.html">CONTACT</a></li>
        </ul>
        <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
        <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
  </div>
</nav>


<!--===================end of navbar===========-->


<section class="form">
    <div class="container contact_container">
        <aside class="contact_aside">
            
            <h2>CONTACT US</h2>
                <p>
                    this is the contact 
                </p>
            <ul class="contact_details">
                <li>
                    <i class="uil uil-phone-times"></i>
                    <h5>456246245645</h5>
                </li>

                <li>
                    <i class="uil uil-location-point"></i>
                    <h5>YEWLEWADI,PUNE</h5>
                </li>
            </ul>
        </aside>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form_name">
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
            </div>

            <input type="email" name="email_address" placeholder="Your Email Address" required>
            <textarea name="message" rows="8" placeholder="Message" required></textarea>
            WRITTEN BY<select name="written_by" id="written by">
                <option value="OTHERS">Others</option>
                <option value="JAMIA_STUDENT">JAMIA STUDENT</option>
            </select>
            <input type="reset" value="Clear" id="reset">
            <button type="submit" class="btn btn-submit" name="btn-submit">OK</button>

        </form>
    </div>
</section>




<footer class="footer">
    <div class="container footer_container">
        <div class="footer_1">
            <a href="index.html" class="footer_logo"><h4>JAMIA MEEZABUL ULOOM</h4></a>
            <p>Lorem ipsum dolor sit amet aaaaaaaap>
        </div>

        <div class="footer_2">
            <h4>permalinks</h4>
            <ul class="permalinks">
                <li><a href="index.html">HOME</a></s></li>
                <li><a href="about.html">ABOUT</a></s></li>
                <li><a href="contact.html">CONTACT</a></s></li>
            </ul>
        </div>

        <div class="footer_3">
            <h4>contact us</h4>
            <div>
                <p>
                    madarsa personalnum(2323234)
                </p>
                <p>madarsa@gmail.com</p>
            </div>
        </div>
        </div>
    </div>
    <div class="footer_copyright">
        <small>Copyright &copy; JAMIA MEEZABUL ULOOM</small>
</footer>
  

<script src="/main.js"></script>


</body>
</html>

