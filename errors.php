<?php
require_once('server.php');

$error_num = count($errors);
if($error_num>0){
    foreach($errors as $error){
        echo $error;
    }
}
?>