<?php
include('functions.php');
if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
}
?>

<html>
  <style>
    .green-public-transport-real-time-locater {
    color: #000000;
    text-align: left;
    font-family: "Inika-Bold", sans-serif;
    font-size: 40px;
    font-weight: 700;
    position: absolute;
    left: 67px;
    top: 123px;
    }

    .real-timeImg {
      width: 250px;
      height: 250px;
      position: absolute;
      left: 1200px;
      top: 103px;
    }

    .bootstrap-tagsinput {
    width: 100%;
    }

    table, th, td {
    border: 3px solid black;
    border-collapse: collapse;
    }

    body{
      background-color: white;
    }
  
  </style>

 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css" />
  <link rel="stylesheet" href="menubar.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>
  
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
      <div class="green-public-transport-real-time-locater">
          Green Public Transport Real-time Locater
      </div>
      <a href= "busRealTimeUpdate.php"><img class="real-timeImg" src="img/real-time.png"></a>
      <script>
          $(document).ready(function(){
          
          load_data();

          function load_data(query1)
          {
            $.ajax({
            url:"busfetch.php",
            method:"POST",
            data:{query:query1},
            dataType:"json",
            success:function(data)
            {
              $('#total_records').text(data.length);
              var html = '';
              if(data.length > 0)
              {
              for(var count = 0; count < data.length; count++)
              {
                html += '<tr>';
                html += '<td>'+data[count].Num+'</td>';
                html += '<td>'+data[count].startPoint+'</td>';
                html += '<td>'+data[count].endPoint+'</td>';
                html += '<td>'+data[count].color+'</td>';
                html += '<td>'+data[count].operationHour+'</td>';
                html += '<td>'+data[count].frequency+'</td>';
                html += '<td>'+data[count].type+'</td></tr>';
              }
              }
              else
              {
              php = '<tr><td colspan="5">No Data Found</td></tr>';
              }
              $('tbody').html(html);
            }
            })
          }

            $('#search').click(function(){
              var query1 = $('#tags').val();
              load_data(query1);
            });

            $("#tags").change(function(){
              var query1 = $('#tags').val();
              load_data(query1);
            });

          });
      </script>
  

    
      <div class="container">
        <br><br><br><br><br>
        <br><br><br><br>
        <div class="form-group">
          <div class="row">
            <br>
            <br>
            <div class="col-md-10">
              <input type="text" id="tags" class="form-control" data-role="tagsinput" />
            </div>
            <div class="col-md-2">
              <button type="button" name="search" class="btn btn-primary" id="search">Search</button>
            </div>
          </div>
      </div>

      <div class="table-responsive">
        <div align="right">
          <p><b>Total Records - <span id="total_records"></span></b></p>
        </div>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Start Pint</th>
                <th>End Point</th>
                <th>Line Color</th>
                <th>Operation Hour</th>
                <th>Frequency (min)</th>
                <th>Type</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>

      <div style="clear:both"></div>
      <br><br><br><br>
  </body>
</html>