<?php 
@session_start();
require_once("classes/dbh.class.php");
$qqq = $dbh->prepare("SELECT * FROM school_profile WHERE id=1");
$qqq->execute();

if ($qqq->rowCount() >0) {
	# code...
	
	$school_details = $qqq->fetch(PDO::FETCH_ASSOC);
$_SESSION['SCHOOL_NAME'] = $school_details['school_name'];
$_SESSION['SCHOOL_ADDRESS'] = $school_details['school_address'];
$_SESSION['SCHOOL_DIRECTOR'] = $school_details['school_director'];
$_SESSION['SCHOOL_SLOGAN'] = $school_details['school_slogan'];
$_SESSION['SCHOOL_CITY'] =$school_details['school_city'];
$_SESSION['SCHOOL_STATE'] = $school_details['school_state'];
$_SESSION['SCHOOL_COUNTRY'] = $school_details['country'];
$_SESSION['SCHOOL_EMAIL'] = $school_details['school_email'];
$_SESSION['SCHOOL_PHONE'] = $school_details['school_phone'];
$_SESSION['SCHOOL_FAX'] = $school_details['school_fax'];
//
 $_SESSION['SCHOOL_POSTAL_CODE'] = $school_details['postal_code'];
 $_SESSION['SCHOOL_GOVT_APP_NO'] = $school_details['govt_approve_number'];
 $_SESSION['SCHOOL_DIRECTOR_MOBILE'] = $school_details['director_mobile'];
  $_SESSION['SCHOOL_REGISTRAR'] = $school_details['registrar'];
 $_SESSION['SCHOOL_REGISTRAR_MOBILE'] = $school_details['registrar_mobile'];
//
$_SESSION['SCHOOL_URL'] = $school_details['website_url'];
$_SESSION['SCHOOL_WEB_NAME'] = $school_details['website_name'];
$_SESSION['SCHOOL_LOGO_BADGE'] = $school_details['school_badge'];
$school_logo = $school_details['school_logo'];
if($school_logo == NULL || $school_logo ==''){
    $_SESSION['SCHOOL_LOGO'] ='images/visa.png';
}else{
    $_SESSION['SCHOOL_LOGO'] = $school_logo;
}
}


?>