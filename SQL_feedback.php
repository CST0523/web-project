<?php
  $host = 'localhost';
  $database = 'web_project';
  $username = 'admin';        
  $password =  'admin';       
  $connect= mysqli_connect($host, $username, $password, $database);
 

  extract($_POST);

  $data = '';
  
  foreach($_POST as $k => $v) {
      if(empty($data)) {
          $data .= "$k ='$v'";
      } else {
          $data .= ", $k='$v'";
      }
  }
  
  $sql = "INSERT INTO feedback set $data";
  $results = mysqli_query($connect, $sql);
  
  if($results) {
      echo "<h1 style=\"color: maroon;margin-right: 10px\">Data Submitted Successfully";
  } else {
      echo "Data submission has failed, Please Try Again";
  }
?>

