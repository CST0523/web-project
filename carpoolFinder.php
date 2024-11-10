<?php
include('functions.php');
if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style1.css" />
    <link rel="stylesheet" href="./menubar.css">
    <link rel="stylesheet" href="./carpoolFinder.css" />

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
      <div class="carpoolBackground"></div>
      <img class="carpoolBackImg" src="img/carpoolBack.png"/>
      <div class="carpool-finder">Carpool Finder</div>
      <div class="bar">
        <div class="bar1"></div>
        
        <div class="find-rider">
          <div class="boxFindRider"></div>
          <div class="find-a-rider">FIND A RIDER</div>
        </div>
        
        <div class="leaving">
          <div class="boxLeaving"></div>
          <div class="leaving-from">Leaving from..</div>
          <img class="locationIcon" src="img/locationIcon.png" />
        </div>
        <div class="going-to">
          <div class="boxGoing"></div>
          <div class="going-to2">Going to...</div>
          <img class="goingIcon" src="img/goingIcon.png" />
        </div>
        <div class="time">
          <div class="boxTime"></div>
          <div class="select-date">Select date</div>
          <img class="timeIcon" src="img/calendarIcon.png" />
        </div>
        <div class="number-passenger">
          <div class="boxPass"></div>
          <div class="people">People</div>
          <img class="peopleIcon" src="img/peopleIcon.png" />
        </div>
      </div>

      <div class="popular-route">
        <div class="carpoolContainer"></div>
        <div class="where-do-you-want-to-go-popular-route">
          WHERE DO YOU WANT TO GO?
          <br />
          POPULAR ROUTE
        </div>
        <div class="puchong-sunway">
          <div class="boxPuchongToSunway"></div>
          <div class="puchong-sunway2">
            <div class="starting-from">Starting from</div>
            <div class="rm-5">RM 5</div>
            <div class="whiteDot"></div>
            <div class="puchong">Puchong</div>
            <div class="sunway">Sunway</div>
            <div class="blueDot"></div>
          </div>
        </div>

        <div class="oug-sugai-besi">
          <div class="boxOugToSB"></div>
          <div class="oug-sungai-besi">
            <div class="starting-from2">Starting from</div>
            <div class="rm-12">RM 12</div>
            <div class="whiteDot1"></div>
            <div class="oug">OUG</div>
            <div class="sungai-besi">Sungai Besi</div>
            <div class="blueDot1"></div>
          </div>
        </div>

        <div class="klang-sri-petaling">
          <div class="boxKlangToSP"></div>
          <div class="klang-sri-petaling2">
            <div class="starting-from3">Starting from</div>
            <div class="rm-8">RM 8</div>
            <div class="whiteDot2"></div>
            <div class="klang">Klang</div>
            <div class="sri-petaling">Sri Petaling</div>
            <div class="blueDot2"></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>