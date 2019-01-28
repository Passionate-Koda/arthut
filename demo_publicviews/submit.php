<?php
ob_start();
$page_title = "Submit";
$page_name = "Contact Us";
include "includes/header2.php";
// $data = "blog";
// $info2 = data2($conn, $data);


if(array_key_exists('submit', $_POST)){
  $ext = ["application/vnd.openxmlformats-officedocument.wordprocessingml.document"];  
  $ext2 = ["image/jpg", "image/JPG", "image/jpeg", "image/JPEG", "image/PNG", "image/png"];
  if(empty($_FILES['upload']['name'])){
    $error['upload'] = "Please choose file";
  }
  if(!in_array($_FILES['upload']['type'], $ext)){
    $error['upload'] = "Invalid file type, Please Upload a .docx(Microsoft Word Document File) ";
  }

  
  if(empty($_POST['name'])){
    $error['name']="Enter a fullname";
  }
  if(empty($_POST['email'])){
    $error['email']="Enter a email";
  }
  if(empty($_POST['phonenumber'])){
    $error['phonenumber']="Enter a Social Media Account";
  }


  if(empty($error)){
    $ver = uploadFiles($_FILES, 'upload', 'application_files/');
    $verb = "Nill";
    // die($verb[1]);

    if($ver[0] && $verb[0]){
      $destn['a'] = $ver[1];
      $destn['b'] = $verb;

      $clean = array_map('trim', $_POST);
     
    //   $headers = "MIME-Version: 1.0" . "\r\n";
    //   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    //   $headers .= "From: <$email>" . "\r\n";

      addApplication($conn, $clean,$destn);
       $email = "arthutng@gmail.com";
      $namee = $_POST['name'];

    //   $to = $email;
    //   $subject = "Application on Skyheights Academy";
      $message = "$namee submitted a content to Arthut. Kindly Visit";
    }



 require_once "Mail.php"; // PEAR Mail package
require_once ('Mail/mime.php'); // PEAR Mail_Mime packge


 




 $from = "contact@arthut.com.ng"; //enter your email address
 $to = "arthutng@gmail.com,banjimayowa@gmail.com"; //enter the email address of the contact your sending to
 $subject = "Content Submission On Arthut"; // subject of your email

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
}






 ?>

</div>
<!-- technology -->
<div class="technology-1">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-5">
					    <?php if(isset($msg['done'])){ ?>
                  <div class="well" style="width:100%; background-color:white; border:2px solid purple; padding:15px">
                    <?php echo $msg['done'] ?>
                  </div>
                <?php } ?>
						<div class="contact-form text-center">
							<h3>SUBMIT PAGE
</h3>
						
 							<form method="post" action="" enctype="multipart/form-data">
	                            <div class="row">
	                                <div class="col-sm-12">
	                                    <div class="form-group">
                                        <?php $display = displayErrors($error, 'name');
                                        echo $display ?>
	                                        <input required type="text" name="name" class="form-control"  placeholder="Your Name">
	                                    </div>
	                                </div>
	                                <div class="col-sm-12">
	                                    <div class="form-group">
                                        <?php $display = displayErrors($error, 'email');
                                        echo $display ?>
	                                        <input required type="email" name="email" class="form-control"  placeholder="Your E-mail">
	                                    </div>
	                                </div>

	                                <div class="col-sm-12">
	                                    <div class="form-group">
                                        <?php $display = displayErrors($error, 'phonenumber');
                                        echo $display ?>
	                                        <input required type="text" name="phonenumber" class="form-control"   placeholder="Your Social Media Accounts">
	                                    </div>
	                                </div>
                                  <div class="col-sm-12">
                                     <div class="form-group">
                                       <p>Attach your content(.docx)</p>
                                       <?php $display = displayErrors($error, 'upload');
                                       echo $display ?>
                                         <input required type="file" name="upload" class="form-control"  placeholder="Attach Your File">
                                     </div>
                                 </div>
                           
	                                <div class="col-sm-12">
	                                    <div class="full-width submit-btn">
	                                        <input value="Submit" name="submit"  type="submit">
	                                    </div>
	                                </div>
	                            </div>
	                        </form>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="tab-wapper">
							<ul class="nav nav-tabs">
							  	<li  class="active"><a href="#become_a_teacher"  data-toggle="tab"><i class="fa fa-user-plus"></i>Post On Arthut</a></li>
							  	<li ><a href="#roles" data-toggle="tab"><i class="fa fa-list-ol"></i>How To Submit</a></li>

							</ul>

							<div class="tab-content">
							  	<div class="tab-pane fade in active" id="become_a_teacher">
							  		<p>We love to feature all artists, so far it is ART, it is welcome under this hut.
</p>							  		<p>However, since we cannot accept all that we see, we would be cherry-picking on this platform thus, would encourage all potential contributors to put out their best foot.
</p>
							  	</div>
							  	<div class="tab-pane fade in " id="roles">
     <li>Name:</li>
<li>Email address: </li>
<li>Social media handle (Facebook, Twitter): </li>
<li>Work type: </li>
<li>About work: </li>
<li>File upload: </li>


<p>This is only open to contributors written literature. </p>



FOR VISUALS: 
 
<p>Kindly send your works as a mail to arthutng@gmail.com via the format below</p>

<li>Artist's name</li>
<li>Short bio: </li>
<li>Social media handle: </li>
<li>About work: </li>

FILE UPLOAD
<li>Photographs and other visual arts (2-5 photos)</li>
<li>Video (Send the work as an attachment via mail to arthutng@gmail.com)</li>
							  	</div>
							</div>
  						</div>
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
