<?php


if(isset($_POST['submailsub']) and $_POST['submail'] != ""){
    
    require_once "conn.php";
    
    $submail = $_POST['submail'];
    
              
    $query = "INSERT INTO subscribers(email) VALUES('$submail')";
    $result = mysqli_query($link, $query);
    
    if($result){
        echo "You have been registered successfully";
    } else {
       echo "There was an error";
    }
    
    
    
  
    
    
    
    
    
    
    
}








?>