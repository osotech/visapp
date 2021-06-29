<?php include_once("getpage.php");?>
<?php 
$fname =$email= $phone = $subject = $message = $msg = "";
$fnameErr = $phoneErr = $subjectErr = $messageErr = $emailErr ="" ;
    if (isset($_POST['submit_msg_btn']) && $_POST['submit_msg_btn'] == "Submit") {
        // code...
    $fname = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    if (empty($fname)) {
        // code...
        $fnameErr = "<p class='text-danger'>Your name is Required!</p>";
    }else{
        $fname = trim(stripslashes(htmlspecialchars($fname)));
    }
    if (empty($email)) {
        // code...
        $emailErr = "<p class='text-danger'>Your E-mail is Required!</p>";

    }else{
        $email = trim(stripslashes(htmlspecialchars($email)));
    }

    if (empty($phone)) {
        // code...
        $phoneErr = "<p class='text-danger'>Your Phone Number is Required!</p>";
        
    }else{
        $phone = trim(stripslashes(htmlspecialchars($phone)));
    }

    if (empty($subject)) {
        // code...
        $subjectErr = "<p class='text-danger'>Message Subject is Required!</p>";
        
    }else{
        $subject = trim(stripslashes(htmlspecialchars($subject)));
    }

     if (empty($message)) {
        // code...
        $messageErr = "<p class='text-danger'>Message Content is Required!</p>";
        
    }else{
        $message = trim(stripslashes(htmlspecialchars($message)));
    }
    if (empty($fnameErr) && empty($emailErr) && empty($phoneErr) && empty($subjectErr) && empty($messageErr)) {
        // code...
        $body=" From: $fname \n Phone: $phone \n Message: $message";
        $mailheader = "From: $email \r\n";
        $recipient = "enquiry@ikraamidealmodelcollege.com";
        if (mail($recipient, $subject, $body,$mailheader)) {
            // code...
            $fname =$email= $phone = $subject = $message ="";
     $fnameErr = $phoneErr = $subjectErr = $messageErr = $emailErr ="";
     $msg = "<p class='text-success'> Message Sent Successfully!</p>";
        }else{
$msg = "<p class='text-danger'>Message Could not be Sent!</p>";
         
        }
     
}
    }
 ?>
<!DOCTYPE html>
<html lang="en">

<?php include_once("HeadTop.inc.php"); ?>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-icon-bx"></div>

        <!-- Header Top ==== -->
        <?php include ("header.php");?>
        <!-- header END ==== -->
        <!-- Content -->
        <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner3.jpg);">
                <div class="container">
                    <div class="page-banner-entry">
                        <h1 class="text-white">Contact Us</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="#">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->

            <!-- inner page banner -->
            <div class="page-banner contact-page section-sp2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 m-b30">
                            <div class="bg-primary text-white contact-info-bx">
                                <h2 class="m-b10 title-head">Contact <span>Information</span></h2>
                                <p>Feel free to send us message. Your e-mail address will not be published</p>
                                <div class="widget widget_getintuch">
                                    <ul>
                                        <li><i class="ti-location-pin"></i><?php echo $_SESSION['SCHOOL_ADDRESS']; ?></li>
                                        <li><i class="ti-mobile"></i><?php echo $_SESSION['SCHOOL_PHONE'] ?> (24/7 Support Line)</li>
                                        <li><i class="ti-email"></i><?php echo $_SESSION['SCHOOL_EMAIL'] ?></li>
                                    </ul>
                                </div>
                                <h5 class="m-t0 m-b20">Follow Us</h5>
                                <ul class="list-inline contact-social-bx">
                                    <li><a href="#" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li><a href="#" class="btn outline radius-xl"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <?php //include_once ("includes/send_contactMail.php");?>
                            <form class="contact-bx" action="" method="POST">
                                <div class="ajax-message"></div>
                                <div class="heading-bx left">
                                    <h2 class="title-head">Get In <span>Touch</span></h2>
                                    <p>Send us your Feedback Our Customer Care Administrator will get back to you </p>
                                </div>
                                <div class="row placeani">
                                    <div class="col-lg-6">
                                        <div class="text-center">
                                            
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Your Name</label>
                                                <input name="name" type="text"  value="<?php echo $fname;?>"
                                                    class="form-control valid-character">
                                                    <span class="text-danger"><?php 
                                            if (!empty($fnameErr)) {
                                                 // code...
                                               echo $fnameErr;
                                             } ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Your Email Address</label>
                                                <input name="email" type="text" class="form-control"  value="<?php echo $email ?>">
                                                <span class="text-danger"><?php 
                                            if (!empty($emailErr)) {
                                                 // code...
                                               echo $emailErr;
                                             } ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Your Phone</label>
                                                <input name="phone" type="text" value="<?php echo $phone ?>" class="form-control int-value">
                                                <span class="text-danger"><?php 
                                            if (!empty($phoneErr)) {
                                                 // code...
                                               echo $phoneErr;
                                             } ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Subject</label>
                                                <input name="subject" type="text"  value="<?php echo $subject ?>" class="form-control">
                                                <span class="text-danger"><?php 
                                            if (!empty($subjectErr)) {
                                                 // code...
                                               echo $subjectErr;
                                             } ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Type Message</label>
                                                <textarea name="message" rows="4" class="form-control"><?php echo $message ?></textarea>
                                                <span class="text-danger"><?php 
                                            if (!empty($messageErr)) {
                                                 // code...
                                               echo $messageErr;
                                             } ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <button name="submit_msg_btn" type="submit" value="Submit" class="btn button-md"> Send
                                            Message</button>
                                            <div class="text-center"><?php echo $msg; ?></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
        </div>
        <!-- Content END-->
        <!-- Footer ==== -->
        <?php include ("./assets/footer.php");?>
        <!-- Footer END ==== -->
        <!-- scroll top button -->
        <button class="back-to-top fa fa-chevron-up"></button>
    </div>
    <!-- External JavaScripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
    <script src="assets/vendors/counter/waypoints-min.js"></script>
    <script src="assets/vendors/counter/counterup.min.js"></script>
    <script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
    <script src="assets/vendors/masonry/masonry.js"></script>
    <script src="assets/vendors/masonry/filter.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/contact.js"></script>
    <script src='assets/vendors/switcher/switcher.js'></script>
    <script src='../../www.google.com/recaptcha/api.js'></script>
</body>


</html>