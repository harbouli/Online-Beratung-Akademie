<?php 



require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
$email = "";
$pass = "";
$websiteName = "onlineberatungakademie";
$yourName = "";

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings

    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $email;                     //SMTP username
    $mail->Password   = $pass;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $websiteName);
    $mail->addAddress('mohamed.harbouli.hb@gmail.com', $yourName);     //Add a recipient


    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML

    if (isset($_POST["consultants"])&& isset($_POST["email"])&& isset($_POST["name"])&& isset($_POST["phone_number"])) {
  
      $name = $_POST["name"];
      $email = $_POST["email"];
      $phone_number = $_POST["phone_number"];

      $mail->Subject = 'demo';
      $mail->Body    = "<br>Name :   <b>$name</b> <br><br>
      <br>Email :   <b>$email</b> <br><br>
      <br>Phone number :   <b>$phone_number</b> <br><br>";
    }
    
    
    if (isset($_POST["Touch"])&& isset($_POST["name_contact"])&& isset($_POST["email_contact"])&& isset($_POST["message_contact"])) {
    
      $name_contact = $_POST["name_contact"];
      $email_contact = $_POST["email_contact"];
      $message_contact = $_POST["message_contact"];

      $mail->Subject = 'contact';
      $mail->Body    = "<br>Name :   <b>$name_contact</b> <br><br>
      <br>Email :   <b>$email_contact</b> <br><br>
      <br>Message :  <br><br> <b>$message_contact</b> <br><br>";
    }

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>amazing School - Thank you</title>
       <link rel="icon" href="assets/images/icon.png">
</head>
<body>
    <style>
        *{
  box-sizing:border-box;
 /* outline:1px solid ;*/
}
body{
background: #ffffff;
background: linear-gradient(to bottom, #ffffff 0%,#e1e8ed 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e1e8ed',GradientType=0 );
    height: 100%;
        margin: 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
  
}

.wrapper-1{
  width:100%;
  height:100vh;
  display: flex;
flex-direction: column;
}
.wrapper-2{
  padding :30px;
  text-align:center;
}
h1{
    font-family: 'Kaushan Script', cursive;
  font-size:4em;
  letter-spacing:3px;
  color:#5892FF ;
  margin:0;
  margin-bottom:20px;
}
.wrapper-2 p{
  margin:0;
  font-size:1.3em;
  color:#aaa;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.go-home{
  color:#fff;
  background:#5892FF;
  border:none;
  padding:10px 50px;
  margin:30px 0;
  border-radius:30px;
  text-transform:capitalize;
  box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
}
.footer-like{
  margin-top: auto; 
  background:#D7E6FE;
  padding:6px;
  text-align:center;
}
.footer-like p{
  margin:0;
  padding:4px;
  color:#5892FF;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.footer-like p a{
  text-decoration:none;
  color:#5892FF;
  font-weight:600;
}

@media (min-width:360px){
  h1{
    font-size:4.5em;
  }
  .go-home{
    margin-bottom:20px;
  }
}

@media (min-width:600px){
  .content{
  max-width:1000px;
  margin:0 auto;
}
  .wrapper-1{
  height: initial;
  max-width:620px;
  margin:0 auto;
  margin-top:50px;
  box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
}
  
}

    </style>
    <div class=content>
        <div class="wrapper-1">
          <div class="wrapper-2">
            <h1>Thank you !</h1>
            <p>Thank you for filling in all the information </p>
            <p>our support team will contact you soon </p>

             <button onclick="history.back()" class="go-home">go home</button> 
            
          </div>
          <div class="footer-like">
            <p>You can always contact us via WhatsApp
             <a href="https://wa.me/00212605203691" target="_blank">+212605203691</a>
            </p>
          </div>
      </div>
      </div>
      
      
      
      <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
</body>
</html>
<?php } catch (Exception $e) {
    echo 'There is an error, please try again or contact us via WhatsApp <a href="https://wa.me/00212605203691" target="_blank">+212605203691</a>';
} ?>