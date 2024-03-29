<?php
    require 'config/constants.php';

    //get back form data if there was a registration error
    $firstname = $_SESSION['signup-data']['firstname'] ?? null;
    $lastname = $_SESSION['signup-data']['lastname']?? null;
    $username = $_SESSION['signup-data']['username'] ?? null;
    $email = $_SESSION['signup-data']['email'] ?? null;
    $createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
    $confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;
    $avatar = $_SESSION['signup-data']['avatar'] ?? null;
    //delete signup data session
    unset($_SESSION['signup-data']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="RegisterStyles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <header class="header">
        <img class="logo" src="Pics\logo.png" alt="logo">
        <nav class="navbar">
            <ul class="nav_links">
                <div class="Hide">
                    <li> <a href="index.php">Home </a></li>
                    <li> <a href="Contacts.php">Contact</a></li>
                    <li> <a href="AboutUs.php">About</a></li>
                </div>
               
            </ul>
        </nav>
        <a class="cta" href="Sign up.php"><button>Register</button></a>
        <a class="cta" href="Login.php"><button>Login</button></a>
        <a class="cta" href="Stocks.xml"><button>Stocks</button></a>

    </header>
    

    <?php
            if(isset($_SESSION['signup'])) :
        ?>
        <div class="alert_message error">
            <p>
                <?= $_SESSION['signup'];
                unset($_SESSION['signup']);
                ?>
            </p>
            

        </div>
        <?php endif ?>
    

        <form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" class="login-box" id = "form" method="POST">
            <h1 style="color: peru; margin-top: 40px;">Cybercat Registration</h1>
            <fieldset class="fieldset">
                <legend style="text-align: start; color: rgb(38, 119, 212); font-weight: bold;">Sign Up</legend>
                <p class="inner-heading" style="color: black; font-weight: bold;">Enter your details below </p>
                <div class="textbox">
                    <input type="text" id="fullname" placeholder="Fullname" class="input-field" name="fullname" required style="padding: 5px; opacity: 0.9;" style="color: black; font-weight: bold;"><br><br>
                </div>
                <div class="textbox">
                    <input type="text" id="username" placeholder="username" class="input-field" name="username" required style="padding: 5px; opacity: 0.9;" style="color: black; font-weight: bold;"><br><br>
                </div>
                <div class="textbox">
                    <input type="text" id="address" placeholder="Address" class="input-field" name="address" required style="padding: 5px; opacity: 0.9;" style="color: black; font-weight: bold;"><br><br>
                </div>
                <div class="textbox">
                    <input type="text" name="city" id="city" placeholder="City" class="input-field"><br><br>
                </div>
                <p class="inner-heading">Gender</p>
                <div style="display: flex;">
                    <input type="radio" id="female" name="gender" value="female" >
                    <label for="female" style="margin-right: 10px;">Female</label>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label><br>
                </div>
                <p class="inner-heading">Enter your account details below </p>
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" id="email" placeholder="Email" class="input-field-icon" name="email" required style="padding: 5px; opacity: 0.9;" ><br><br>
                </div>
                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" placeholder="Password" class="input-field-icon" name="createpassword" required style="padding: 5px; opacity: 0.9;"><br><br>
                </div>
                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Password Again" class="input-field-icon" required style="padding: 5px; opacity: 0.9;"><br><br>
                </div>

                <div style="display: flex;">
                    <input type="checkbox" id="agree" value="I agree" name="agree" required>
                    <label for="agree" > I agree</label>
                </div>
                <div style="display: flex;">
                    <p class="inner-heading" style="margin-right: 1%;">Already have an account?</p>
                    <a href="Login.php" style="margin-left: 0%; margin-top: 5%; color: rgb(38, 119, 212);">Log-in</a>
                </div>
                <div style="justify-content: flex-end; display: flex;">
                    <button class="btn" style="cursor: pointer;" name="submit" type="submit" id="sub" style="color: black;" >Submit <i class="material-icons" style="font-size:large; padding-right: 3px;padding-left: 5px; color: black;"></i></button>
                </div>
                <div id = "agreearea"></div>
            </fieldset>
        </form>
    </div>








  



</body>
</html>