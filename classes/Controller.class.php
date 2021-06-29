<?php 
require_once ("dbh.class.php");

class Controller extends Dbh {

    public function url_root($flink) {
		return "http://localhost/ikraam/". $flink;
	}
     public function __construct(){
        
        if (substr($_SERVER['REQUEST_URI'], -4) == '.php' or stripos($_SERVER['REQUEST_URI'], '.php') == true) {
			//self::_redirect('404');
			//header("Location: http://localhost/ikraam/error-404.html");
            $link ="error-404.html";
            header('Location: '.self::url_root($link));
            exit();
		}
    }
    
    public function FetchUser(){
        //
        $stmt = $this->DbConnect()->query("SELECT * FROM staff");
        if ($stmt->rowCount()>0) {
            $result = $stmt->fetchAll();
            return $result;
        }
       
    }

    public function FetchBlog(){
        //
        $stmt = $this->DbConnect()->query("SELECT * FROM blog_post ORDER BY blog_id DESC");
        if ($stmt->rowCount()>0) {
            $result = $stmt->fetchAll();
            return $result;
        }
       
    }

    //fetch recent blog posts

    public function FetchRecentBlogPost(){
        //
        $stmt = $this->DbConnect()->query("SELECT * FROM blog_post WHERE created_at >= (DATE(NOW())- INTERVAL 20 DAY) ORDER BY blog_id DESC LIMIT 5");
        if ($stmt->rowCount()>0) {
            $result = $stmt->fetchAll();
            $data = $result;
            return $data;
        }
       
    }
    
    public function getSchoolProfileDetails(){
        $query = $this->DbConnect()->prepare("SELECT * FROM school_profile WHERE id=1");
        $query->execute();
        if ($query->rowCount()>0) {
            // code...
            $school_details = $query->fetch();
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

    }

    public function getAuthorInfo($id){
        $query = $this->DbConnect()->prepare("SELECT * FROM director WHERE director_id=?");
        $query->execute([$id]);
        if ($query->rowCount()>0) {
            // code...
            $result = $query->fetch();
            return $result;
        }
    }
    //count comment per blog
    public function getCommentCount($blog_id){
        $query = $this->DbConnect()->prepare("SELECT count(*) as totalComment FROM blog_post_comments WHERE blog_id=?");
        $query->execute([$blog_id]);
        if ($query->rowCount()>0) {
            // code...
            $result = $query->fetch();
            // $return = $query->rowCount();
            $totalComment = $result['totalComment'];
            return $totalComment;
        }else{
            return "0";
        }
    }

    //email subscriber function 
    public function clean_user_string_($string){
    $string = trim($string);
    $string = stripslashes($string);
    $string= htmlspecialchars($string);
    return $string;
        }
}

$Controller = new Controller;