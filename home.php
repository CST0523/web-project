<?php 
include('functions.php');

if (!isAdmin()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
}

if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['user']);
        header("location: login.php");
}
?>
<style>
        .btn-2 {
        padding: 10px;
        font-size: 15px;
        color: white;
        background: red;
        border: none;
        border-radius: 5px;
        }
</style>
<!DOCTYPE html>
<html>
<head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
        .header {
                background: #003366;
        }
        button[name=register_btn] {
                background: #003366;
        }
        </style>
</head>
<body>
        <div class="header">
                <h2>Admin - Home Page</h2>
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
                                                         &nbsp;
                                                        <a href="create_user.php"><div class="btn"> + Add user</div></a>
                                        </small>

                                <?php endif ?>
                        </div>
                </div>
        </div>
</body>
</html>