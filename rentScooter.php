<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style1.css" />
    <link rel="stylesheet" href="./menubar.css">
    <link rel="stylesheet" href="./rentScooter.css" />

    <title>Green Trips</title>
  </head>
  <body>
    <div class="menu-bar">
      <div class="logoimg"></div>
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

    <div class="web" style="width: 100%; height: 100%;">
      <div class="rentScooterTop"></div>
      <div class="top">
        <img class="rentScooterBack" src="img/rentScooterBack.png" />
        <div class="topBack"></div>
        <div class="reserve-rent-e-scooter">Reserve &amp; Rent E-Scooter</div>
      </div>
      
      <div class="find-nearset-scooter">
        <div class="containerFindScooter"></div>
        <a href= "scooterBooking.php"><img class="findScooter" src="img/findScooter.png" /></a>
        <div class="current-locate">
          <div class="boxCurrentLocation"></div>
          <div class="current-location">Current location</div>
          <img class="iconLocation" src="img/iconLocation.png">
        </div>
        <div class="find-the-nearest-available-scooter">
          Find the nearest
          <br />
          available scooter
        </div>
      </div>
    </div>
  </body>
</html>