<!DOCTYPE html>
<html>
    <head>
        <title>Portal-Register</title>
                     <!--Links-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            
        
        <style>
            .left{
                float: left;
            }
            .errors{
                background-color: darkgray;
                color:red;
                width:100%;
                border-radius: 10px;
                padding-left: 10px;
            }
            .header{
                background-color: #449d44;
                width:50%;
                margin:50px auto 0px;
                text-align: center;
                color: white;
                border:1px solid gray;
                border-bottom: none;
                border-radius: 10px 10px 0px 0px;
                padding:20px;
            }
            form{
                width:50%;
                border:1px solid gray;
                margin:0px auto;
                padding:20px;
                border-top: none;
            }
            .btn{
                width:100%;
            }
            @media only screen and (max-width:660px){
                .header,form{
                    width:100%;
                }
            }
       
        </style>
    </head>
    <body>
        <div class="header">
            <h1>Register</h1>
        </div>

        <form method="post" action="register.php">
            <div class="errors">
                <p><?php include('errors.php');?></p>
            </div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input class="form-control" type="text" name="fullname" placeholder="FullName" size="80" value="<?php echo "$fullname";?>" required>
            </div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input class="form-control" type="email" name="email" placeholder="Email"size="80" value="<?php echo "$email";?>" required>
            </div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                <input class="form-control" type="text" name="contact" placeholder="Contact" size="80" value="<?php echo "$contact";?>" required>
            </div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input class="form-control" type="password" name="password" placeholder="Password" size="80" required>
            </div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input class="form-control" type="password" name="confirm_password" placeholder="Confirm Email" size="80" required>
            </div><br>
                <button class="btn btn-success btn-lg" name="register-btn">Register!</button>
            <p class="text-center">Already a member! <a href="login.php">Login Here</a></p>
        </form>
    </body>
</html>