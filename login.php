<?php include('functions.php') ?>
<style>

        body{
                background: url("img/Login1.jpg");
                background-size: 100%;
                background-position: center;
        }

        .header {
                width: 40%;
                color: white;
                background: #5F9EA0;
                text-align: center;
                border: 1px solid #B0C4DE;
                border-bottom: none;
                border-radius: 10px 10px 0px 0px;
                padding: 20px;
                position: absolute;
                left: 50%;
                top: 21%;
        }

        form, .content {
                width: 40%;
                margin: 0px auto;
                padding: 20px;
                border: 1px solid #B0C4DE;
                background: white;
                border-radius: 0px 0px 10px 10px;
                position: absolute;
                top: 35%;
                left: 50%;
        }
        .input-group {
                margin: 10px 0px 10px 0px;
        }
        .input-group label {
                display: block;
                text-align: left;
                margin: 3px;
        }
        .input-group input {
                height: 30px;
                width: 93%;
                padding: 5px 10px;
                font-size: 16px;
                border-radius: 5px;
                border: 1px solid gray;
        }

        .error {
                width: 92%; 
                margin: 0px auto; 
                padding: 10px; 
                border: 1px solid #a94442; 
                color: #a94442; 
                background: #f2dede; 
                border-radius: 5px; 
                text-align: left;
        }


        .btn {
                padding: 10px;
                font-size: 15px;
                color: white;
                background: #5F9EA0;
                border: none;
                border-radius: 5px;
        }

</style>

<!DOCTYPE html>
<html>
<head>
        <title>Registration system PHP and MySQL</title>


</head>

<body>
        <div class="header">
                <h2>Login!</h2>
        </div>
        <form method="post" action="login.php">
                <h2>Welcome back!</h2>
                <h2>Login to your account</h2>
                <?php echo display_error(); ?>

                <div class="input-group">
                        <label>Username</label>
                        <input type="text" name="username" >
                </div>
                <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password">
                </div>
                <div class="input-group">
                        <button type="submit" class="btn" name="login_btn">Login</button>
                </div>
                <p>
                        Not yet a member? <a href="register.php">Sign up</a>
                </p>
        </form>
</body>
</html>