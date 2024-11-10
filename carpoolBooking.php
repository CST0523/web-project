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
    <link rel="stylesheet" href="./carpoolBooking.css" />

    <title>Green Trops</title>
  </head>
  <body>
    <div class="menu-bar">
      <div class="logoimg"></div>
      <a href = "homepage.php"><img src ="img/ogo.png">
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
      <div class="leaving-from-klang">
        <div class="boxLeavingFrom"></div>
        <div class="leaving-from">Leaving from</div>
        <div class="dotLeaving"></div>
        <div class="klang">Klang</div>
      </div>

      <div class="going-to-sri">
        <div class="boxGoingTo"></div>
        <div class="going-to">Going to</div>
        <div class="dotGoing"></div>
        <div class="sri-petaling">Sri Petaling</div>
      </div>

      <div class="up-and-down">
        <div class="whiteCircle"></div>
        <img class="upDownIcon" src="img/updown.png" />
      </div>

      <div class="available">
        <div class="_25-oct-2023">25 Oct 2023</div>
        <div class="_15-riders-available">15 riders available</div>
      </div>

      <div class="container-1">
        <div class="klang-sri-petaling">
          <div class="box-1"></div>
          <div class="klang-sri-petaling2">
            <div class="rm-4">RM 4</div>
            <div class="dotKlang"></div>
            <div class="klang2">Klang</div>
            <div class="sri-petaling2">Sri Petaling</div>
            <div class="dotSriPetaling"></div>
          </div>
        </div>
        <div class="_2-30-pm">2:30 pm</div>
        <div class="rider">
          <div class="rider-name">Rider Name</div>
          <img class="riderIcon" src="img/riderIcon.png" />
        </div>
        <div class="passenger">
          <img class="passIcon" src="img/riderIcon.png" />
          <img class="passIcon1" src="img/riderIcon.png" />
        </div>
        <div class="rate">
          <div class="_4-5">
            <img class="starIcon" src="img/starIcon.png" />
            <img class="starIcon1" src="img/starIcon.png" />
            <img class="starIcon2" src="img/starIcon.png" />
            <img class="starIcon3" src="img/starIcon.png" />
            <img class="halfStarIcon" src="img/halfStarIcon.png" />
          </div>
          <div class="_4-5-35">4.5 (35)</div>
        </div>
        <div class="book">
          <div class="boxBook1"></div>
          <div class="book2">Book</div>
        </div>
      </div>

      <div class="container-2">
        <div class="klang-sri-petaling">
          <div class="box-2"></div>
          <div class="klang-sri-petaling3">
            <div class="rm-3">RM 3</div>
            <div class="dotKlang1"></div>
            <div class="klang3">Klang</div>
            <div class="sri-petaling3">Sri Petaling</div>
            <div class="dotSriPetaling1"></div>
          </div>
        </div>
        <div class="_12-30-pm">12:30 pm</div>
        <div class="rider">
          <div class="rider-name2">Rider Name</div>
          <img class="riderIcon1" src="img/riderIcon.png" />
        </div>
        <div class="passenger2">
          <img class="passIcon2" src="img/riderIcon.png" />
          <img class="passIcon3" src="img/riderIcon.png" />
          <img class="passIcon4" src="img/riderIcon.png" />
        </div>
        <div class="rate2">
          <div class="_4-52">
            <img class="starIcon4" src="img/starIcon.png" />
            <img class="starIcon5" src="img/starIcon.png" />
            <img class="starIcon6" src="img/starIcon.png" />
            <img class="starIcon7" src="img/starIcon.png" />
            <img class="starIcon8" src="img/starIcon.png" />
          </div>
          <div class="_5-0-64">5.0 (64)</div>
        </div>
        <div class="book">
          <div class="boxBook2"></div>
          <div class="book3">Book</div>
        </div>
      </div>
      
      <div class="booking-a-carpool">Booking A Carpool</div>
    </div>
  </body>
</html>
