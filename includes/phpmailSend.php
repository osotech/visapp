<?php
if ($_SERVER['REQUEST_METHOD']=== "POST") {
	// code...
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
//$call = $_POST['call'];
//$website = $_POST['website'];
//$priority = $_POST['priority'];
//$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Message: $message";
$recipient = "enquiry@ikraamidealmodelcollege.com";
$subject = $_POST['subject'];
$mailheader = "From: $email \r\n";
if (mail($recipient, $subject, $formcontent, $mailheader)) {
	// code...
	$msg = "Messge Sent Successfully!";
}else{
$msg = " Could not send your Message, Please try again...";
}

header("Location: index?p=contact_&rmsg=".$msg);
exit();
}else{
	header("Location: index?p=contact_");
	exit();
}
?>





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

    if (empty($fnameErr) && empty($emailErr) && empty($phoneErr) && empty($subjectErr) && empty($messageErr)) {?>
        <?php
    // code...
$body=" From: $name \n Phone: $phone \n Message: $message";
$recipient = "enquiry@ikraamidealmodelcollege.com";
$subject = $_POST['subject'];
$mailheader = "From: $email \r\n";
if (mail($recipient, $subject, $body, $mailheader)) {
    // code...
     $msg = "<p class='text-success'> Message Sent Successfully!</p>";
     $fname =$email= $phone = $subject = $message ="";
     $fnameErr = $phoneErr = $subjectErr = $messageErr = $emailErr ="";
}else{
$msg =" Could not send your Message, Please try again...";
}
header("Location: contact?p=contact_&rmsg=".$msg);
exit();
}else{
    header("Location: contact?p=contact_");
    exit();
}
}
 ?>