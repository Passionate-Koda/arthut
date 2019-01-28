<?php
ob_start();
$page_title = "Contact Us";
$page_name = "Contact Us";
include "includes/header2.php";
// $data = "blog";
// $info2 = data2($conn, $data);


if(array_key_exists("submit", $_POST)){
  $email = $_POST['email'];
  $name = $_POST['name'];
  $message = $_POST['comment']. " **********The email to this message is $email*********";

//   $to = "arthutng@gmail.com";
//   $subject = "Message From $name to ARTHUT";
//   $txt = $message. "the email to this message is $email";
//   $headers = "From: $email" . "\r\n" .
//   "CC: banjimayowa@gmail.com";




 require_once "Mail.php"; // PEAR Mail package
require_once ('Mail/mime.php'); // PEAR Mail_Mime packge


 




 $from = "contact@arthut.com.ng"; //enter your email address
 $to = "arthutng@gmail.com,banjimayowa@gmail.com"; //enter the email address of the contact your sending to
 $subject = "Message From $name to ARTHUT"; // subject of your email

$headers = array ('From' => $from,'To' => $to, 'Subject' => $subject);

$text = $message; // text versions of email.
// $html = "<html><body>Name: $name <br> Email: $email <br>Message: $message <br></body></html>"; // html versions of email.

$crlf = "\n";

$mime = new Mail_mime($crlf);
$mime->setTXTBody($text);
// $mime->setHTMLBody($html);

//do not ever try to call these lines in reverse order
$body = $mime->get();
$headers = $mime->headers($headers);

 $host = "localhost"; // all scripts must use localhost
 $username = "contact@arthut.com.ng"; //  your email address (same as webmail username)
 $password = "ArthutNg@.02"; // your password (same as webmail password)

$smtp = Mail::factory('smtp', array ('host' => $host, 'auth' => true,
'username' => $username,'password' => $password));

$mail = $smtp->send($to, $headers, $body);

$msg = [];

if (PEAR::isError($mail)) {
 $msg['failed'] = "<p>" . $mail->getMessage() . "</p>";
}
else {
 $msg['done'] = "Message Successfullly Sent"; 
// header("Location: http://www.example.com/");
}












}
 ?>

</div>
<!-- technology -->
<div class="technology-1">
	<div class="container">
		<div class="col-md-9 mx-auto" >
			<div class="business">
			    <?php if(isset($msg['done'])){ ?>
                  <div class="well" style="width:100%; background-color:white; border:2px solid purple; padding:15px">
                    <?php echo $msg['done'] ?>
                  </div>
                <?php } ?>

				<div id="contact" class="contact">
				    
						<h3>Send Your Message</h3>
					 <div class="contact-grids">
						 
							 <form method="post" action="">
								<input type="text" placeholder="Name" name="name">
								<input type="text" placeholder="Email" name="email">
								<!--<input type="text" placeholder="Website">-->
								<textarea placeholder="Message..." name="comment"></textarea>
								<input type="submit" name="submit" value="SEND">
							 </form>
							 </div>

				</div>
			</div>
		</div>
	<!-- technology-right -->
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>
<!-- technology -->
<?php
include "includes/footer.php";
 ?>
