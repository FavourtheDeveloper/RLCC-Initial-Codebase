<?php


if(isset($_POST['consub']) and $_POST['name'] != "" and $_POST['mail'] != "" and $_POST['subject'] != "" and $_POST['message'] != "" ){
    
    require_once "conn.php";
    
    $conname = $_POST['name'];
    $conmail = $_POST['mail'];
    $consubject = $_POST['subject'];
    $conmess = $_POST['message'];
    
              
    $query = "INSERT INTO contact(name, email, subject, message) VALUES('$conname', '$conmail', '$consubject', '$conmess')";
    $result = mysqli_query($link, $query);
    
    if($result){
        echo "Your Form has been sent successfully\r\n";
        
        
        $to = "$conmail";
        $subject = "RLCC CHURCH";
        $message = "Your Contact Form have been recieved successfully";
        $headers = 'From: MEDIA/ICT rlcc@riversoflovechristiancentre.com.stackstaging.com';




    if(mail($to, $subject, $message, $headers)){
     echo "Email sent and delivered successfully to ".$conmail.".";
    } else {
    echo "There was an error";
    }

        
        
        
        
        
        
    } else {
       echo "There was an error";
    }
    
    
    
  
    
    
    
    
    
    
    
}








?>