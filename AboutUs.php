<?php
  require 'config/constants.php';

  $username = $_SESSION['signin-data']['username'] ?? null;
    $password = $_SESSION['signin-data']['password']?? null;

    //delete signin data session
    unset($_SESSION['signin-data']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AboutUs</title>
    <!-- css -->
  
    <link rel="stylesheet" href="style.css">

</head>
<body class="container" style="  background-image: linear-gradient(to right, rgba(255,0,0,0), rgb(221, 168, 168));
">
    <header class="header">
        <img class="logo" src="Pics\logo.png" alt="logo">
        <nav class="navbar">
            <ul class="nav_links">
                <li> <a href="index.php">Home </a></li>

                <li> <a href="Contacts.php">Contact</a></li>
                <li> <a href="AboutUs.php">About</a></li>
            </ul>
        </nav>
        <a class="cta" href="Sign up.php"><button>Register</button></a>
        <a class="cta" href="Login.php"><button>Login</button></a>
        <a class="cta" href="Stocks.xml"><button>Stocks</button></a>

    </header>


    

    <center><div class="contacts">
                

                <h1 style="color: #885b9e">I.T.E 300C Group 2</h1>
        <h3 style="color: black">Names of Group Members</h3>
                <ol class="list">
                    
                    <li><p> Nurudeen Seidu - 5211040211</p></li>
                    <li><p> Elizabet Ama Opayinhoyena - 5211040212</p></li>
                    <li><p> Alex Brafo - 5211040213</p></li>
                    <li><p> Ruth Ampong - 5211040214</p></li>
                    <li><p> Marvin Opoku - 5211040215</p></li>
                    <li><p> Dominic Eshun-Eshilley - 5211040216</p></li>
                    <li><p> Emmanuel Agyemang - 5211040217</p></li>
                    <li><p> Elizabeth Asare Doku - 5211040218</p></li>
                    <li><p> Clement Zielebe - 5211040219</p></li>
                    <li><p> Mary Serwaa Yeboah  - 5211040220</p></li>

                </ol>
            </div></center>


    


    <section class="footer">

        <div class="box-container">

           

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +233 550440050</a>
                <a href="#"><i class="fas fa-phone"></i> +233 000000000</a>
                <a href="#"><i class="fas fa-envelope"></i> cybercat@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Ghana - Kumasi</a>
            </div>

            <div class="box">
                <h3>Support</h3>
                <a href="#"><i class="fas fa-arrow-right"></i>support@cybercat.com.gh</a>
                <a href="#"><i class="fas fa-arrow-right"></i>Safety tips</a>
                <a href="#"><i class="fas fa-arrow-right"></i>Contact Us</a>
                <a href="#"><i class="fas fa-arrow-right"></i>FAQ</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-pinterest"></i>pinterest</a>
            </div>

        </div>

        <div class="credit"> All &copy; copyrights are reserved by <span>Cybercat</span> </div>

    </section>
</body>
</html>