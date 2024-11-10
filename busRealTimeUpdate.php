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
    <link rel="stylesheet" href="./busRealTimeUpdate.css" />

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
      <div class="search">
        <div class="searchBar" style="top: 590px;"></div>
        <img class="searchIcon2" src="img/searchIcon.png" style="top: 600px;"/>
        <div class="which-station-are-you-at" style="top: 600px;">Which station are you at ?</div>
      </div>

      <div class="busRealTimeBackground"></div>
      <div class="timeline">
        <div class="timelineContainer" style="width: 100%;"></div>
        <div class="timelineBox">
          <div class="klcc-utara-kl-94">KLCC (Utara) (Kl94)</div>
          <div class="menara-bsn-kl-98">Menara Bsn (Kl98)</div>
          <div class="monorail-raja-chulan-kl-22">Monorail Raja Chulan (Kl22)</div>
          <div class="kl-convention-centre-barat-kl-88">KL Convention Centre (Barat) (Kl88)</div>
          <div class="verticalLine"></div>
          <div class="greenDot1"></div>
          <div class="greenDot2"></div>
          <div class="greenDot3"></div>
          <div class="greenDot4"></div>
          <div class="_06-15">06:15</div>
          <div class="_06-16">06:16</div>
          <div class="_06-21">06:21</div>
          <div class="_06-23">06:23</div>
          <div class="_6-00">
            <div class="timeBox1"></div>
            <div class="_06-00">06:00</div>
            <img class="time1" src="img/time.png" />
          </div>
          <div class="_6-00">
            <div class="timeBox2"></div>
            <div class="_06-01">06:01</div>
            <img class="time2" src="img/time.png" />
          </div>
          <div class="_6-00">
            <div class="timeBox3"></div>
            <div class="_06-06">06:06</div>
            <img class="time3" src="img/time.png" />
          </div>
          <div class="_6-00">
            <div class="timeBox4"></div>
            <div class="_06-08">06:08</div>
            <img class="time4" src="img/time.png" />
          </div>
        </div>
        <div class="suria-klcc-bukit-bintang">
          Suria KLCC -&gt; Bukit Bintang
        </div>
      </div>
      <img
        class="realTimeBusTracking"
        src="img/realTimeBus.png"
      />
      <div class="bus-icon">
        <div class="busBox"></div>
        <img class="bus-Icon" src="img/bus.png" />
        <div class="busLine"></div>
        <div class="gokl-01-green">GOKL-01-(GREEN)</div>
      </div>
      
    </div>
  </body>
</html>