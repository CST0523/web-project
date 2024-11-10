<?php include('functions.php') ?>

<style>
 * { margin: 0px; padding: 0px; }
        body{
                background: #1A5276;
        }

        .header {
                width: 40%;
                margin: 50px auto 0px;
                color: white;
                background: #5F9EA0;
                text-align: center;
                border: 1px solid #B0C4DE;
                border-bottom: none;
                border-radius: 10px 10px 0px 0px;
                padding: 20px;
        }

        form, .content {
                width: 40%;
                margin: 0px auto;
                padding: 20px;
                border: 1px solid #B0C4DE;
                background: white;
                border-radius: 0px 0px 10px 10px;

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
        <h2>Create An Account</h2>
</div>
<form method="post" action="register.php">
    <?php echo display_error(); ?>
        <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
                <label>Date Of Birth</label>
                <input type="date" name="dob" value="<?php echo $dob; ?>">
        </div>
        <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_1">
        </div>
        <div class="input-group">
                <label>Confirm password</label>
                <input type="password" name="password_2">
        </div>
        <div class="input-group">
                <button type="submit" class="btn" name="register_btn">Register</button>
        </div>
        <p>
                Already a member? <a href="login.php">Sign in</a>
        </p>
</form>
</body>
</html>