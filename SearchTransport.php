<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style1.css" />
    <link rel="stylesheet" href="./menubar.css">
    <link rel="stylesheet" href="./searchTransport.css" />

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
      <div class="topBackground" style="width: 100%;"></div>
        <img class="topBackgroundImg" src="img/background.png"/>
        <div class="green-public-transport">Green Public Transport</div>
      
        <div class="search-for-a-line">Search for a line</div>
      
      <div class="searchBarBackg" style="left: 500px;">
        <img class="searchIcon" src="img/searchIcon.png" style="left: 20px; top: 13px"/>
        <span class="search1" style="left: 50px; top: 13px">Search</span>
      </div>

        <div class="lrt">
          <a href="lrtKJL.php">
            <div class="box1" style="left: 500px;"></div>
            <div class="group1">
              <div class="lrt2" style="left: 565px;">LRT</div>
              <img class="lrtIcon" src="img/LRT.png" style="left: 565px;"/>
            </div>
          </a>
        </div>

        <div class="mrt">
          <a href="mrtKajang.php">
            <div class="box2" style="left: 800px;"></div>
            <div class="group2">
              <div class="mrt2" style="left: 865px;">MRT</div>
              <img class="mrtIcon" src="img/LRT.png" style="left: 865px;"/>
            </div>
          </a>
        </div>

        <div class="monorail1">
          <a href="monorail.php">
            <div class="box3" style="left: 1110px;"></div>
            <div class="group3">
              <div class="monorail2" style="left: 1155px;">Monorail</div>
              <img class="monorailIcon" src="img/monorail.png" style="left: 1175px;"/>
            </div>
          </a>
        </div>

        <div class="electrical-bus">
          <a href="electricalBus.php">
            <div class="box4" style="left: 500px;"></div>
            <div class="group4">
              <div class="electrical-bus2" style="left: 527px;">Electrical Bus</div>
              <img class="electricalBusIcon" src="img/electricalBus.png" style="left: 565px;"/>
            </div>
          </a>
        </div>

        <div class="carpool">
          <a href="carpool.php">
            <div class="box5" style="left: 800px;"></div>
            <div class="group5">
              <div class="carpool2" style="left: 847px;">Carpool</div>
              <img class="carpoolIcon" src="img/carpool.png" style="left: 865px;"/>
            </div>
          </a>
        </div>

        <div class="e-scooter">
          <a href="e-scooter.php">
            <div class="box6"style="left: 1110px;"></div>
            <div class="group6">
              <div class="e-scooter2" style="left: 1150px;">E-scooter</div>
              <img class="scooterIcon" src="img/scooter.png" style="left: 1175px;"/>
            </div>
          </a>
        </div>
    </div>
  </body>
</html>
