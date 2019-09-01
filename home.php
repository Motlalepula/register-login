<?php
require_once('server.php');
if(empty($_SESSION['user'])){
    header('loaction:login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student Portal-Login</title>
        <!--Links-->
            <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
            <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css">
        <style>
            .red-bdr{
                border: 1px solid rgb(100,0,0);
                margin: 50px 0px 0px 50px;
                border-radius: 10px;
                padding-top: 0;
            }
            .left{
                float: left;
            }
            .container-fluid{
               
            }
            @media only screen and (max-width:600px){
                .red-bdr{
                    margin: 0;
                }
            }
        </style>
    </head>
    <body>
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-md-6 red-bdr">
            <?php if(isset($_SESSION['user'])):?>
            <h1>Welcome <?php echo $_SESSION['user']?></h1>
            <a href="login.php?logout='1'">Logout</a>
            <?php endif?>
                </div>
            </div>
        </div>
    </body>
</html>