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
    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="footer.css">

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
      <div class="containeroffice">
        <center>
          <i class="fa-solid fa-location-dot" style="color: #1a5276; font-size:70px"></i><br><br>
          <b>OFFICE ADDRESS</b><br><br>
          <p>897, Jalan Kuning, Sunway </p><p>City, Kuala Lumpur, 431732</p>
        </center>
      </div>
      <div class="containerphone">
        <center>
          <i class="fa-solid fa-phone" style="color: #1a5276; font-size:70px"></i><br><br>
          <b>PHONE NUMBER</b><br><br>
          <p>03-12345168</p>
          <p>1800-199-130-143</p>
        </center>
      </div>
      <div class="containerfax">
        <center>
          <i class="fa-solid fa-fax" style="color: #1a5276; font-size:70px"></i><br><br>
          <b>FAX</b><br><br>
          <p>1-234-567-89</p>
        </center>
      </div>
      <div class="containeremail">
        <center>
          <i class="fa-solid fa-envelope" style="color: #1a5276; font-size:70px"></i><br><br>
          <b>EMAIL</b><br><br>
          <p>greentrips@</p><p>customersupports.com</p>
        </center>
      </div>

  
      <div class="containercontact">
          <p><b><center>Contact Us</center></b></p>
          
          <div id="error_msg"></div>
          <form id="input_form">
            <input type="text" id="name" name="name" placeholder="Name" required>
        
            <input type="text" id="email" name="email" placeholder="Email">
          
            <input type="text" id="contact" name="phone" placeholder="Contact Number">
          
            <textarea id="subject" name="feedback" placeholder="Feedback" style="height:150px"></textarea>
        
            <center><input type="submit" value="Submit" id="Submit"></center>
          </form>
      
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        </script>

        <script>
          $(document).ready(function() {
           $('#input_form').submit(function(e) {
            e.preventDefault()

        $.ajax({
            url: 'SQL_feedback.php',
            data: $(this).serialize(),
            method: 'POST',
            success: function(resp) {
                $('#error_msg').html(resp);
            }
        })
      })
    })

        </script>
      </div>

    </body>
</html>