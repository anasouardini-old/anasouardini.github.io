<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>ABERewards</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link rel="stylesheet" id="themify-google-fonts-css" href="https://fonts.googleapis.com/css?family=Open+Sans%3A400italic%2C600italic%2C700italic%2C400%2C300%2C600%2C700%7COpen+Sans%3Anormal%2C300%7COpen+Sans%3Anormal%2C300%7COpen+Sans%3Anormal%2C300%7COswald%3Anormal%2C300%7COswald%3Anormal%2C300%7COswald&amp;amp;subset=latin" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    if (isset($_GET['submit'])){
      $firstName = $_GET['firstName'];
      $lastName = $_GET['lastName'];
      $email = $_GET['email'];
      $message = $_GET['message'];
      $mailTo = "customer.service@thanksagain.com";
      $subject = "test";
      $headers = "From: my website \r\n From : ".$email."\r\n Name : ".$firstName." ".$lastName."\r\nMessage : ".$message;
      if(mail($mailTo, $subject, $headers)){
        echo "<div class='alert sent' id='alert' ><p> Email Sent </p></div>";
      }
      else{
        echo "<div class='alert failed' id='alert' ><p> Email Sending Failed </p></div>";
      }
    }
    ?>


  <div class="menu_icon" id="menuIcon">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
    <div class="menu_overlay" id="menuOverlay">
        <div class="menu_objects"><a href="#howItWorks">
                <h4>How It Works</h4>
            </a><a href="http://www.thanksagain.com/AUS">
                <h4>Locations</h4>
            </a><a href="#contactUs">
                <h4>Contact Us</h4>
            </a><a href="https://www.thanksagain.com/web/guest/signin">
                <h4>Sign In</h4>
            </a><a href="https://www.thanksagain.com/member-enrollment?source=AUS">
                <h4>Register</h4>
            </a></div>
    </div>
    <div class="navBar">
        <div class="container">
            <div class="logo"></div>
            <div class="menu"><a class="howItWorks" href="#howItWorks">How It Works</a><a class="locations" href="http://www.thanksagain.com/AUS">Locations</a><a class="contactUs" href="#contactUs">Contact Us</a><a class="singIn" href="https://www.thanksagain.com/web/guest/signin">Sign In</a><a class="register" href="https://www.thanksagain.com/member-enrollment?source=AUS">Register</a></div>
        </div>
    </div>
    <div class="hero">
        <div class="thanks">
            <div class="container">
                <h1>Announcing ABERewards powered by Thanks Again <span>&reg</span></h1>
                <p>Thanks Again enables you to earn valuable rewards when you shop, park and dine at ABE as well as over 100 other airports (and beyond)!</p>
            </div>
        </div>
        <div class="overlay">
            <div class="container">
                <h2>Enroll Today And Earn 100 Bonus Points!*</h2><a href="https://www.thanksagain.com/member-enrollment?source=ABE"><button>Register Now!</button></a>
            </div>
            <div class="info">
                <p>*Bonus Points are awarded after your first Qualifying Transaction.</p>
            </div>
        </div>
    </div>
    <section class="steps" id="howItWorks">
        <div class="container">
            <div class="stepsContainer">
                <div class="register">
                    <div class="label"><i class="fas fa-user-plus"></i>
                        <h3>Register</h3>
                    </div>
                    <div class="content">
                        <p>Life as a frequent traveler is complicated enough.</p>
                        <p>That’s why we’ve made earning points with ABERewards is refreshingly simple.</p><a href="https://www.thanksagain.com/member-enrollment?source=ABE"><button>Register Now!</button></a>
                    </div>
                </div>
                <div class="enroll">
                    <div class="label"><i class="fa fa-credit-card"></i>
                        <h3>Enroll</h3>
                    </div>
                    <div class="content">
                        <p>Enroll your Visa &reg or American Express &reg credit or debit card(s) and use them to shop, park or dine at participating locations.</p>
                    </div>
                </div>
                <div class="redeem">
                    <div class="label"><i class="fas fa-shopping-cart"></i>
                        <h3>Redeem</h3>
                    </div>
                    <div class="content">
                        <p>When you’ve accumulated enough points, go to our redemption catalog to choose from an array of reward options including cash back, airline miles, hotel points, and other attractive perks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="whereToEarn">
        <div class="container">
            <h2>Where To Earn</h2>
            <div class="divsContainer">
                <div class="dining">
                    <div class="label"><i class="fas fa-glass-martini-alt"></i>
                        <h3>Dining</h3>
                    </div>
                    <div class="content">
                        <p>Maximize your points when you dine both at the airport and in the city.</p>
                    </div>
                </div>
                <div class="parking">
                    <div class="label"><i class="fas fa-car"></i>
                        <h3>Parking</h3>
                    </div>
                    <div class="content">
                        <p>Get points for parking at ABE.</p>
                    </div>
                </div>
                <div class="shopping">
                    <div class="label"><i class="fas fa-shopping-bag"></i>
                        <h3>Shopping</h3>
                    </div>
                    <div class="content">
                        <p>Be rewarded when you shop at ABE.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="signUp">
        <h2>Sign Up</h2>
        <p>Ready to earn some points?</p><a href="https://www.thanksagain.com/member-enrollment?source=ABE"><button>Register Now!</button></a>
    </section>
    <section class="contactUs" id="contactUs">
        <h2>Contact Us</h2>
        <div class="form">
            <form action="/index.php#contactUs" method="get">
                <div class="name"><input type="text" name="firstName" placeholder="First Name"><input type="text" name="lastName" placeholder="Last Name"></div><input type="email" name="email" placeholder="Your Email"><textarea name="message" placeholder="Your Message"></textarea><input type="submit" name="submit">
            </form>
        </div>
    </section>
    <section class="footer">
        <div class="container">
            <div class="logo"></div><span><a href="https://www.thanksagain.com/web/guest/terms-conditions">Terms and Conditions</a>| <a href="https://www.thanksagain.com/web/guest/privacy-policy">Privacy Policy</a></span>
            <p>© Copyright 2019, Lehigh Valley International Airport</p>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>

</html>
