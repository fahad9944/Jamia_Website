<?php
require_once('connect.php');





if($_SERVER ['REQUEST_METHOD'] == "POST")
{

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
    
    {
        echo "<br><h2>PLEASE LOGIN TO CONTACT US</h2><br>";
    }
   else   {
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
   }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAMIA MEEZABUL ULOOM</title>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/contact.css">

    <!--icon-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.5/css/unicons.css">

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;0,700;1,400;1,800;1,900&display=swap" rel="stylesheet">
    
</head>

<body>

<nav>
    <div class="container nav_container">
        <a href="index.php"><h3>JAMIA MEEZABUL ULOOM</h3></a>
        <ul class="nav_menu">
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="login.php">LOGIN</a></li>
            <li><a href="register.php">REGISTER</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
        </ul>
        <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
        <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>

    </div>
</nav>

<!--===================end of navbar===========-->


<style>
    .contact_aside {
      background-image: url("madarsa/jamiafront.png");
    }
    </style>
    

<section class="form">
    <div class="container contact_container">
        <aside class="contact_aside">

        <h2>CONTACT US</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae minus quod unde sequi obcaecati voluptatibus necessitatibus saepe dicta recusandae inventore animi consectetur sunt iusto, 
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

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form_name">
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
            </div>

            <input type="email" name="email_address" placeholder="Your Email Address" required>
            <textarea name="message" rows="7" placeholder="Message" required></textarea>
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
            <a href="index.html" class="fooer_logo"><h4>JAMIA MEEZABUL ULOOM</h4></a>
            <p>Lorem ipsum dolor sit amet aaaaaaaa</p>
        </div>

        <div class="footer_2">
            <h4>permalinks</h4>
            <ul class="permalinks">
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="login.php">LOGIN</a></li>
            <li><a href="register.php">REGISTER</a></li>
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
  

<script src="js/main.js"></script>

</body>
</html>
