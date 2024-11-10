<?php
include('functions.php');
if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
}
?>

<html>
  <head>
    <link rel="stylesheet" href="menubar.css">
    <link rel = "stylesheet" href="footer.css">
    <link rel="stylesheet" href="aboutus.css">
    <script src="https://kit.fontawesome.com/a9ff56c5c0.js" crossorigin="anonymous"></script>
  </head>
  
  <div class="menu-bar">
            <div class="logo">
                <a href = "homepage.php"><img src ="img/logo.png">
            <ul>
            
                <li class="active"><a href = "homepage.php">Home</a></li>
                <li><a href = "#">Services</a>
                    <div class= "sub-menu-1">
                        <ul>
                            <li><a href ="SearchTransport.php">Search Green Public Transport</a></li>
                            <li><a href ="transportlocator.php">Green Public Transport Real-time Locator</a></li>
                            <li><a href ="carpoolFinder.php">Carpool Finder</a></li>
                            <li><a href ="rentScooter.php">Reserve and Rent E-scooter</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href = "#">Account</a>
                <div class= "sub-menu-1">
                    <ul>
                        <li><a href ="account.php">Profile</a></li>
                        <li><a href ="editaccount.php">Edit Profile</a></li>
                    </ul>
                </div>
                </li>
                <li><a href = "#">Contact Us</a>
                    <div class= "sub-menu-1">
                        <ul>
                            <li><a href ="aboutus.php">About Us</a></li>
                            <li><a href ="contactus.php">Contact Us</a></li>
                        </ul>
                    </div>
                    </li>
                <li><a href = "index.php?logout='1'">Logout</a></li>
            
            </ul>
        
        </div>
        
  <body>
    <div class="section1">
        <div class="section1left">
            <br>
            <h1><p><b>About Us</b><b></p></h1>
            <br>
            <br>
            <br>
            <p>Green Trips redefining urban mobility for a sustainable tomorrow.</p>
            <br>
            <p>Green Trips is committed to revolutionizing urban transportation.</p>
            <p>We're dedicated to reducing congestion and emissions by promoting eco-friendly commuting options.</p>
            <br>
        </div>
        
        <div class="section1right">
            <br>
            <h1><p><b>Company Logo</b><b></p></h1>
            <img src ="img/logo.png" width="350px" height="200"> 
            <br>
        </div>

    </div>

    <div class="section2">
        <div class="section2left">
            <br>
            <br>
            <img src="img/aboutus_train.jpg" alt="train" width="250" height="300" style="border:5px solid black">
            <br>
            
        </div>
        
        <div class="section1right">
            <br>
            <br>
            <h1><p><b>Company Story</b><b></p></h1>
            <br>
            <br>
            <br>

            <p>At Green Trips, our journey began with a vision for a greener,</p> 
            <p>more sustainable urban landscape. We're a pioneering </p>
            <p>transportation solutions company committed to reshaping </p>
            <p>the way cities move. Founded with a passion for environmental</p>
            <p>stewardship and a dedication to transforming commuting experiences,</p>
            <p>Green Trips is at the forefront of advancing eco-friendly mobility.</p>
            <br>
        </div>
    </div>

    <div class="section3">
        <div class="section3left">
            <br>
            <h1><p><b>Mision</b><b></p></h1>
            <br>
            <p>Green Trips is on a mission to revolutionize urban commuting. We </p>
            <p>strive to curtail traffic congestion and diminish emissions by </p>
            <p>championing carpooling and sustainable transport alternatives. Our </p>
            <p>aim is to foster a community of conscientious commuters, dedicated to </p>
            <p>nurturing both our planet and the cities we call home.</p>
            <br>
        </div>
        
        <div class="section3right">
            <br>
            <h1><p><b>Vision</b><b></p></h1>
            <br>
            <p>Our vision is a world where cities pulsate with life, yet breathe with</p>
            <p>ease. We envisage urban spaces thriving with sustainable transport solutions,</p>
            <p>where each journey contributes to the vitality of our planet.</p>
            <br>
        </div>
    </div>

  </body>
    
  <div class= "footer-container">
        <div class="footer">
            <div class="footer-heading footer-1">
                <h2>Company</h2>
                <a href="aboutus.php">About</a>
                <a href="contactus.php">Contact</a>
            </div>

            <div class="footer-heading footer-2">
                <h2>Account</h2>
                <a href="account.php">Profile</a>
                <a href="#">Contact</a>
            </div>

            <div class="footer-heading footer-3">
                <h2>Services</h2>
                <a href ="SearchTransport.php">Search Green Public Transport</a>
                <a href ="transportlocator.php">Green Public Transport Real-time Locator</a>
                <a href ="carpoolFinder.php">Carpool Finder</a>
                <a href ="rentScooter.php">Reserve and Rent E-scooter</a>
            </div>
        </div>
    </div>
  
</html>