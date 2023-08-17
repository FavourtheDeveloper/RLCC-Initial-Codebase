<?php require 'includes/header.php'?>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Visit us at :</p>
                    <p>No 3, David marvelous Street off Alhaji Abdulwahab Ademola Street, Old Iso Eran  Bus
                        Stop, Powerline, Osogbo
                    </p>
                    <p>Or call us on  :</p>
                    <p>
                        08063070222 & &nbsp;09013007073
                    </p>
<p>
                        riversoflovechristiancentre100@gmail.com
                    </p>


                </div>
                <div class="col-md-8">
                    <p>For prayer requests or general messages, fill the form below</p>
                    <form class="form-horizontal" role="form"   action = "<?php $_PHP_SELF ?>" method = "POST" >
                        <div class="form-group">
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Name" name = "name" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" placeholder="Phone Number" name ="phone" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name = "email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="text" placeholder="Subject" name ="subject" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10"> 
                            <textarea class="form-control" rows="5" id="comment" name ="comment" required ></textarea>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="col-sm-10">
                            <button type="submit" class="btn btns btn-default"name "submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       

 <?php 
  $to = "riversoflovechristiancentre100@gmail.com";
 $subject = $_POST["subject" ];
 $body = $_POST["comment" ];
$email = $_POST["email" ];
$name = $_POST["name" ];
$phone = $_POST["phone" ];
$txt = "HELLO   ".$name. "   has contacted us on the Church website  with email address   ". $email. "   and phone number  ".$phone."   asking  ".$body ;
$headers = "From: &email" ;
//echo  " subject  ". $subject ;
mail($to,$subject,$txt, $headers);
//echo $txt;
    require 'includes/footer.php';
    ?>
       
       
       