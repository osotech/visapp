<?php
@session_start();
 include ("includes/class-autoload.inc.php");?>
<?php  require_once ("classes/dbh.class.php"); ?>
<?php require_once ("classes/Controller.class.php");?>
<?php 
$schoolDetails = new Controller;
$schoolName = $schoolDetails->getSchoolProfileDetails();
 ?>

<?php
$DefaultSchool = $_SESSION['SCHOOL_NAME'];
if (isset($_GET['p'])) {
    # code...
    $getpage = $_GET['p'];
    switch ($getpage) {
    case 'about_':
        # code...
        $pageTitle = $DefaultSchool." || About Us";
        break;
        case 'contact_':
        # code...
        $pageTitle = $DefaultSchool." || Contact Us";
        break;
        
        case 'blog_':
        # code...
        $pageTitle = $DefaultSchool." || Blog Post";
        break;
         case 'event_':
        # code...
        $pageTitle = $DefaultSchool." || Event Post";
        break;
         case 'fee_':
        # code...
        $pageTitle = $DefaultSchool." || Fee Structure";
        break;
         case 'facility_':
        # code...
        $pageTitle = $DefaultSchool." || Our Facilities";
        break;
          case 'staff_':
        # code...
        $pageTitle = $DefaultSchool." || Our Staff";
        break;
          case 'faq_':
        # code...
        $pageTitle = $DefaultSchool." || Frequently Ask Questions";
        break;

           case 'how_to_apply_':
        # code...
        $pageTitle = $DefaultSchool." || How To Apply";
        break;

         case 'Entrance_':
        # code...
        $pageTitle = $DefaultSchool." || Entrance Examination";
        break;

         case 'procedure_':
        # code...
        $pageTitle = $DefaultSchool." || Entry Procedure";
        break;

         case 'admission_':
        # code...
        $pageTitle = $DefaultSchool." || School admission";
        break;

         case 'principal_':
        # code...
        $pageTitle = $DefaultSchool." || School Principal";
        break;

          case 'chairMsg_':
        # code...
        $pageTitle = $DefaultSchool." || The Director Message";
        break;
          case 'our_value_':
        # code...
        $pageTitle = $DefaultSchool." || The School History";
        break;

           case 'hods_':
        # code...
        $pageTitle = $DefaultSchool." || The School HODs";
        break;

        case 'upcoming_':
        # code...
        $pageTitle = $DefaultSchool." || Upcoming Events";
        break;

         case 'happening_':
        # code...
        $pageTitle = $DefaultSchool." || Today's Events";
        break;
    
    default:
        # code...
          $pageTitle = $DefaultSchool." || Home Page";
        break;
}
}else{
     $pageTitle = $DefaultSchool." || Home Page";
}