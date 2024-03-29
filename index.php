<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- css -->
    <link rel="stylesheet" href="style.css">

</head>
<body  class="container">

<div class="groupnames" id="gpop">
        <center><h4 style="color: white">I.T.E 300C Group 2</h4></center>
        <center><h3 style="color: yellow">Names of Group Members</h3></center>
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
        
        <center><button id="cancel" onclick="gpop_close()"  class="btn">Start Shopping</button>
        
    </div>

    <div class="popup" id="pop">
        <center><h3 id="successMess">Are you sure you want to buy:</h3>
                <h3 id="successpname"></h3>  
        </center>
        <h3 id="pname">New Apple iPhone 12</h3>
        <p id="pdes">Storage 64GB, UK Used, BH (98%) Color: Blue</p><br>
        <h2 id="pprice" >Price: <br>GHC 2000</h2>
        <center><button id="buy" onclick="success_mess()" class="btn">Buy Now</button>
        <button id="cancel" onclick="popup_close()"  class="btn">Back</button></center>
    </div>

<div class="body" id="body">    
    <header  class="header">
       <img class="logo" src="Pics\logo.png" alt="logo"> 
        <nav class="navbar">
            <ul class="nav_links">
                
                    <li> <a href="#">Home </a></li>
                    <li> <a href="Contacts.php">Contact</a></li>
                    <li> <a href="AboutUs.php">About</a></li>
                
                
            </ul>
        </nav>
        <a class="cta" href="Sign up.php"><button>Register</button></a>
        <a class="cta" href="Login.php"><button>Login</button></a>
        <a class="cta" href="Stocks.xml"><button>Stocks</button></a>

    </header>

    
    <section class="blog">



        <h2 class="heading">Cybercat Online Store</h2>

        
   

    <div>


        <div class="box-container">

            <div class="box shadow">

                <div class="image">
                    <img src="Pics/lap 1.jpg" alt="">
                    <h2 class="price">Price: <br>GHC 2000</h2>
                </div>
                <div class="content">
                    <h3>Dell Latitude 5480</h3>
                    <p>8GB DDR4 RAM, 256 SSD Storage 14 inches, Keyboard light</p>
                    <button onclick="popup_open()" class="btn">Buy</button>
                </div>

            </div>

            <div class="box shadow">

                <div class="image">
                    <img src="Pics/phone 1.jpg" alt="">
                    <h2 class="price">Price: <br>GHC 2000</h2>
                </div>
                <div class="content">
                    <h3>New Apple iPhone 12</h3>
                    <p>Storage 64GB, UK Used, BH (98%) Color: Blue</p>
                    <a href="#" class="btn">Buy</a>
                </div>

            </div>

            <div class="box shadow">

                <div class="image">
                    <img src="Pics/lap 2.jpg" alt="">
                    <h2 class="price">Price: <br>GHC 2000</h2>
                </div>
                <div class="content">
                    <h3>Dell Inspiron 15</h3>
                    <p>core i7 8th Gen, 1 TB HDD, 8GB RAM Radeon Graphics 4 Gig Dedecated</p>
                    <a href="#" class="btn">Buy</a>
                </div>

            </div>

            <div class="box shadow">

                <div class="image">
                    <img src="Pics/phone 2.jpg" alt="">
                    <h2 class="price">Price: <br>GHC 2000</h2>
                </div>
                <div class="content">
                    <h3>New Apple iPhone 12 Pro</h3>
                    <p>Storage 256 GB, RAM 6GB UK Used, BH(90%), color: black </p>
                    <a href="#" class="btn">Buy</a>
                </div>

            </div>

            <div class="box shadow">

                <div class="image">
                    <img src="Pics/phone.jpg" alt="">
                    <h2 class="price">Price: <br>GHC 2000</h2>
                </div>
                <div class="content">
                    <h3>Alcatel</h3>
                    <p>2GB RAM, 8GB Storage</p>
                    <a href="#" class="btn">Buy</a>
                </div>

            </div>

            <div class="box shadow">

                <div class="image">
                    <img src="Pics/g6.jpg" alt="">
                    <h2 class="price">Price: <br>GHC 2000</h2>
                </div>
                <div class="content">
                    <h3>HP Pavilion g series</h3>
                    <p>G^, 256 SSD Storage, 8GB RAM, </p>
                    <a href="#" class="btn">Buy</a>
                </div>

            </div>
            <div class="box shadow">

                <div class="image">
                    <img src="Pics/sa.jpg" alt="">
                    <h2 class="price">Price: <br>GHC 2000</h2>
                </div>
                <div class="content">
                    <h3>Samsung Galaxy A10s</h3>
                    <p>6GB RAM, 64GB Storage </p>
                    <a href="#" class="btn">Buy</a>
                </div>
        </div>
        <div class="box shadow">

            <div class="image">
                <img src="Pics/pix.jpg" alt="">
                <h2 class="price">Price: <br>GHC 2000</h2>
            </div>
            <div class="content">
                <h3>Google Pixel 8 Pro</h3>
                <p>16GB RAM, 256GB Storage </p>
                <a href="https://www.example.com" class="btn" onclick="window. open(this. href); return false;">Buy</a>
            </div>
        </div>
    </section>



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
                <a href="#"><i class="fas fa-arrow-right"></i>Contcat Us</a>
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
</div>

<script src="action.js"></script>
</body>
</html>