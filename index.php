<?php
include('functions.php');
if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
        <div class="header">
                <h2>Successful Login</h2>
        </div>
        <div class="content">
                <!-- notification message -->
                <?php if (isset($_SESSION['success'])) : ?>
                        <div class="error success" >
                                <h3>
                                        <?php 
                                                echo $_SESSION['success']; 
                                                unset($_SESSION['success']);
                                        ?>
                                </h3>
                        </div>
                <?php endif ?>
                <!-- logged in user information -->
                <div class="profile_info">
                        <img src="img/user.jpg"  >

                        <div>
                                <?php  if (isset($_SESSION['user'])) : ?>
                                        <strong><?php echo $_SESSION['user']['username']; ?></strong>

                                        <small>
                                                <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
                                                
                                                <br>

                                                <a href="index.php?logout='1'"><div class="btn-2">Logout</div></a>

                                                <a href="homepage.php"><div class="btn">Continuos</div></a>
                                        </small>

                                <?php endif ?>
                        </div>
                </div>
        </div>
</body>
</html>