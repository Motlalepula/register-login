<?php require_once('server.php');
if(empty($_SESSION['user'])){
    header('location:login.php');
}?>
<html>
    <head>
        <title>PHP and MYSQL</title>
         <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
            <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css">
        
                <!--Links-->
        <style>
            a{
                background-color: aqua;
                border-radius: 5px;
                padding:5px;
                text-decoration: none;
                color:white;
                margin-bottom: 10px;
            }
            a:hover{
                opacity: 0.5;
                text-decoration: none;
            }
            .left{
                float: left;
            }

            @media only screen and (max-width:600px){
                .red-bdr{
                    margin: 0;
                }
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
            .user-info{
                width:50%;
                border:1px solid gray;
                margin:0px auto;
                padding:20px;
                border-top: none;
            }
       
        </style>
    </head>
    <body>
        <div class="container-fluid text-center">
            <div class="header"><h1>Logged In</h1></div>
            <div class="user-info">
                <?php if(isset($_SESSION['user'])):?>
                <h4>Welcome <?php echo $_SESSION['user']?></h4>
                <a class="btn btn-danger btn-md" href="login.php?logout='1'">Logout</a>
            <?php endif?>   
            </div>
        </div>
    </body>
</html>