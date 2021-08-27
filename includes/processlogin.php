<?php
if(isset($_POST['user_name']) && isset($_POST['password'])){
    
include_once "dbconn.php";
include_once "functions.php";
    $username = htmlentities($_POST['user_name']);
    $password = htmlentities($_POST['password']);
                                    
    if(chkuserstatus($conn,$username,$password) !== false){
           $user_data = chkuserstatus($conn,$username,$password);
        
           session_start();

           $_SESSION['user_id'] = $user_data['user_id'];
           header("location: ../home.php");

    } else{
        header("location: ../index.php?error=loginfailed");
    }    
}