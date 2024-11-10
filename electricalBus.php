<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style1.css" />
    <link rel="stylesheet" href="./menubar.css">
    <link rel="stylesheet" href="./electricalBus.css" />
    <link rel="stylesheet" href="./lrt.css" />

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
      <div class="top">
        <img class="lrtBackground" src="img/lrtBackground.png"/>

        <svg
          class="lrtBackground1"
          width="1440"
          height="358"
          viewBox="0 0 1440 358"
          fill="none"
        >
        <path
            d="M1440 0.000343323C1440 197.442 1440 357.5 697.5 357.5C0 357.5 0 231.5 0 0C0 0 221.707 0.000213623 697.5 0.000213623C1173.29 0.000213623 1440 0.000343323 1440 0.000343323Z"
            fill="url(#paint0_linear_110_1028)"
            fill-opacity="0.85"
          />
          <defs>
            <linearGradient
              id="paint0_linear_110_1028"
              x1="719.631"
              y1="358"
              x2="719.631"
              y2="-1.40144e-05"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#8EE2F5" stop-opacity="0.49" />
              <stop offset="1" stop-color="#48BFB2" stop-opacity="0.750833" />
            </linearGradient>
          </defs>
        </svg>

        <div class="lrt-info">Electrical Bus - Info</div>
      </div>

    <div class="route-map" style="top: 500px;">Route Map</div>
      <img class="BusLineMap" src="img/bus.jpeg" />
    </div>
  </body>
</html>