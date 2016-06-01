<?php
include("header.php");
?>
<!-- #Header Starts -->



<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "contactkalakarproduction@gmail.com";
 
    $email_subject = date("Y-m-d H:i:s");
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "<h3>We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br /> </h3>";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['phone']) ||
 
        !isset($_POST['message'])) {
 
        died('<h3>We are sorry, but there appears to be a problem with the form you submitted.</h3>');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['phone']; // not required
 
    $message = $_POST['message']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= '<h3>The Email Address you entered does not appear to be valid.<br /></h3>';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= '<h3>The Name you entered does not appear to be valid.<br /></h3>';
 
  }
 
 
 
  if(strlen($message) < 2) {
 
    $error_message .= '<h3>The Message you entered do not appear to be valid.<br /></h3>';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
$sent = mail($email_to, $email_subject, $email_message, $headers);  


 
?>
 
 
 
<!-- include your own success html here -->
 
 
 

 




<!-- Cirlce Starts -->
<div id="about"  class="container spacer about">
<br>
<h2 class="text-center wowload fadeInUp">Thanks <?php echo $_POST['email']; ?></h2>
  <div class="row">
  <div class="col-sm-12 wowload fadeInLeft">
    
    <h3>Thanks for contacting us, we will reply to you as soon as possible. If any problem, our e-mail address is info@kalakarproduction.com</h3>

  </div>
  </div>

  <div class="process">
  
  </div>
</div>
<!-- #Cirlce Ends -->





 











<!--Contact Starts-->
<?php
  include("contact.php");
?>
<!--Contact Ends-->



<!-- Footer Starts -->
<?php
  include("socialmedia.php");
?>
<!-- # Footer Ends -->
<a href="#works" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>

 
<?php

}
 
?>




<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
</div>



<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
<script src="assets/script.js"></script>

</body>
</html>
