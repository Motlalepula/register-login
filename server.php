<?php
session_start();

$fullname = "";
$email = "";
$contact = "";
$errors = array();


//connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Bird_Members";

$connect = mysqli_connect("$servername","$username","$password","$dbname");
if(!$connect){
   echo "No connection";
}

//Register new user

if(isset($_POST['register-btn'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password']; 
    
    $query_select = "SELECT * FROM members WHERE email = '$email'";
    $result_select = mysqli_query($connect,$query_select);
    $row = mysqli_num_rows($result_select);
    
    if($row>=1){
        array_push($errors,"User already exists");
    }else{
        
        if($password != $confirm_password){
            array_push($errors,"Two passwords do not match");
        }
        else{
            if(strlen($password)>8){
                $qry_insert = "INSERT INTO members VALUES(Null,'$fullname','$email','$contact','$password')";
                $result_insert = mysqli_query($connect,$qry_insert);
                if($result_insert){
                    $_SESSION['user'] = $email;
                    header('location:index.php');
                }else{
                    array_push($errors,"Could not add a new user please try again <br>or contact our team to add you manually");
                }
            }else{
                array_push($errors,"Password must be more than 8 characters");
            }
        }
    }
}

//login

if(isset($_POST['login-btn'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
    $query_select = "SELECT * FROM members WHERE email = '$email' && password = '$password'";
    $query_result = mysqli_query($connect,$query_select);
    $row = mysqli_num_rows($query_result);
    if($row>=1){
       $_SESSION['user']=$email; 
        header('location:index.php');
    }else{
        array_push($errors,"Wrong Email or Password");
    }
}


//Logout

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['user']);
}

?>