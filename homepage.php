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
        <link rel="stylesheet" href="homepage.css">
        <link rel = "stylesheet" href="footer.css">
        <script src="https://kit.fontawesome.com/a9ff56c5c0.js" crossorigin="anonymous"></script>
    </head>
    <body>
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
    
        <div class="gifcontainer">
            <img src="img/cropmrt.gif" alt="Moving mrt" style="width:100%;height:400px; opacity:0.6" >
            <div class="topicbox">
                <p><b></b>Welcome Green Trips</b></p>
            </div>
        </div>


        <div class="servicecontainer">
            <br>
            <h2><center>Our Services</center></h2>
            <br><br><br>
            <div class="sectioncard">
                <div class="row">
                <div class="column">
                    <div class="card">
                    <a href="searchtransport.php">
                    <image src= "img/public-transport.jpg" alt="testing"></image><br><br>
                    <span>Search Green Public Transport</span><br><br>
                    </a>
                    </div>
                </div>
                
                <div class="column">
                    <div class="card">
                    <a href="transportlocator.php">
                        <image src= "img/public-locator.jpg" alt="testing"></image><br><br>
                        <span>Green Public Transport Locator</span><br><br>
                    </a>
                    </div>
                </div>
                
                <div class="column">
                    <div class="card">
                    <a href="carpoolFinder.php">
                        <image src= "img/carpool.jpg" alt="testing"></image><br><br>
                        <span>Carpool Finder</span><br><br>
                    </a>
                    </div>
                </div>
                
                <div class="column">
                    <div class="card">
                    <a href="rentScooter.php">
                        <image src= "img/scooter.jpg" alt="testing"></image><br><br>
                        <span>Reserve and Rent E-Scooter</span><br><br>
                    </a>
                    </div>
                </div>
                </div>
            </div>

        </div>


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
    </body>
</html>