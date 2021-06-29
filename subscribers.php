<?php 	
if (isset($_PSOT['action']) && $_POST['action'] =="Submit") {
	// code...
	require_once ("includes/class-autoload.inc.php");
	require_once ("classes/dbh.class.php");
	require_once ("classes/Controller.class.php");
	$email = $_POST['email'];

	$Controller = new Controller;

	
        $email = $Controller->clean_user_string_($email);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (empty($email)) {
            // code...
            $data = "<b class='text-danger'>Enter Your E-mail address!</b>";
        }else
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            // code...
        $data = "<b class='text-danger'>Please Enter a Valid E-mail address!</b>";
        }else{
            $query =$Controller->$this->DbConnect()->prepare("SELECT subscriber_id FROM subscribers WHERE subscriber_email =? LIMIT 1");
            $query->execute([$email]);
            if ($query->rowCount()>0) {
                // code...
                $data = "<b class='text-danger'> This <span class='text-info'>$subscriber_email</span> is already subscribed to Our Newsletters</b>";
            }else{
                //prepare to insert the user
            $query = $this->DbConnect()->prepare("INSERT INTO subscribers (subscriber_email) VALUES (?);");
            if($query->execute(array($subscriber_email))){
                $data = "<b class='text-success'><span class='text-info'>$subscriber_email</span> is now Addedd to Our Newsletters List Thanks...</b>";
            }else{
                $data ="<b class='text-danger'> Oops! Something Went Wrong Try Again!</b>";
            }
            }

        }
        return $data;
}



 ?>