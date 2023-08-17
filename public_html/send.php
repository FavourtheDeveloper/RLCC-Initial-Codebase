<?php
if (isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $txt = "Name: " . $name. "\n" . $_POST["message"];
    $to = "pastorfemiisaiah@gmail.com, riversoflovechristiancentre100@gmail.com";
    $headers = "From: ". $email . "\r\n";
    $headers .= "CC: pastorfemiisaiah@gmail.com\r\n";
    $headers .= "BCC: riversoflovechristiancentre100@gmail.com\r\n";

if (mail($to,$subject,$txt,$headers)){
    echo "<h1>Form Sucessfully Sent</h1>";
    echo "<a href='https://riversoflovechristiancentre.org/live_radio.html'>Go back to the Online Radio Page</a>";
} else {
    echo "<h1>There is a Problem</h1>";
}

}


?>



