<?php
    include('functions.php');
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }


    if(isset($_REQUEST['submit']))
    {
    $usename=$_REQUEST['username'];
    $email=$_REQUEST['email'];
    $dob=$_REQUEST['dob'];
    $password=$_REQUEST['password'];

    if((!empty($username)) && (!empty($email)) && (!empty($dob)))
    {
        $id = $_SESSION['user']['id'];
        $up= mysqli_query($db, "UPDATE users SET 'username'= '$username', 'email' = '$email' , 'dob' = '$dob' WHERE id=" . $id);

        if(!empty($password))
        {
            $up= mysqli_query($db, "UPDATE users SET 'password' = '$password' WHERE id=" . $id);  
        }
    }

        $_SESSION['success']="Profile has been updated";
        header('location: account.php');
        exit;
    }
    else
    {
        $_SESSION['errorMsg']="Name, Email and date are required";
        header('location: editaccount.php');
        exit;
    }

    $db = mysqli_connect('localhost', 'admin', 'admin', 'web_project');
    $id = $_SESSION['user']['id'];
    $getData = mysqli_query($db, "SELECT * FROM users WHERE id=" . $id);
    $row = mysqli_fetch_assoc($getData);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="menubar.css">
    <link rel="stylesheet" href="account.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
        
    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">Edit Profile</h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">Account</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt
                                    class="d-block ui-w-80">
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Upload new photo
                                        <input type="file" class="account-settings-fileinput">
                                    </label> &nbsp;
                                    <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                </div>
                            </div>
                            <form method= "POST" >
                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control mb-1" value="<?php echo $row ['username'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">E-mail</label>
                                        <input type="text" class="form-control mb-1" value="<?php echo $row ['email'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Date Of Birth</label>
                                        <input type="text" class="form-control" value="<?php echo $row ['dob'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
                                </div>
                            </form>     
                        </div>       
                        
                                    
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="text-right mt-3">
            <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
            <button type="button" class="btn btn-default">Cancel</button>
        </div>-->
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>