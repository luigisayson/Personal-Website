<?php 

require 'vendor/autoload.php';
use Mailgun\Mailgun;

$mg = Mailgun::create(getenv("MAILGUN_API_KEY"));
$domain = getenv('DOMAIN');

if(isset($_POST['submit'])){
      $to = "luigisayson@gmail.com"; // this is your Email address
      $from = $_POST['email']; // this is the sender's Email address
      $name = $_POST['name'];
      $phone = $_POST['phone_number'];
      $subject = $_POST['subject'];
      $message = $name . ",  " . $phone . "wrote the following:" . "\n\n" . $_POST['Message'];
  
      $headers = "From:" . $from;
      mail($to,$subject,$message,$headers);
      mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
      echo "Mail Sent";
      $last_name = $_POST['last_name'];
      $subject = "Form submission";
      $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
      $mg->messages()->send("$domain", [
        'from'    => "$name $from <$from>",
        'to'      => "$to",
        'subject' => "$subject",
        'text'    => "$message"
      ]);
    }
?>


<!DOCTYPE html>
<html lang="en-us">
    <?php include("header.html");?>
    <?php include("navigation.html");?>
    <body>
        <div class = "container">
          <div class="page-header mb-4">
            <h1>Contact Luigi</h1>
          </div>
          <div class="row">
              <div class="col contact-info">
                <div>
                  E-mail: luigisayson@gmail.com<br>
                  Phone Number: (714) 980-2526<br>
                </div>
                <div class="icons">
                  <a class="github icon" href="https://github.com/luigisayson" target="_blank"><i class="fab fa-github"></i></a>
                  <a class="linkedin icon" href="https://www.linkedin.com/in/luigi-sayson-5b4b50119/" target="_blank"><i class="fab fa-linkedin"></i></a>
              </div>
              </div>
              
              <div class="col">
                  <form method="post" action="">
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                      </div>
                      <div class="col-md-6 mb-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                      </div>
                    </div>
                    <div class="form-group">
                         <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" rows="5" name="message" id="message" placeholder="Message" required></textarea>
                    </div>
                    <div class="form-group"> 
                      <button type="submit" name="submit" value="submit" class="btn btn-default btn-secondary">Submit</button>
                    </div>
                  </form>            
              </div>
        </div>
    </body>
    
</html>
