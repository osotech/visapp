<?php 
include_once "my_constant.php";

class Dbh {
    protected $host;
    protected $User;
    protected $Pass;
    protected $db_name;
    protected $charset;

    protected function DbConnect(){
        $this->host =HOST_NAME;
        $this->User =DB_USER;
        $this->Pass = DB_PASS;
        $this->db_name =DB_NAME;
        $this->charset =CHARSET_NAME;
        try {
           //DSN 
           $dsn = "mysql:host=".$this->host.";dbname=".$this->db_name.";charset=".$this->charset;
           $dbh = new PDO ($dsn, $this->User,$this->Pass);
          $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $dbh;
        } catch (PDOException $tech) {
            //throw $th;
            die("Server Connection Failed: ".$tech->getMessage());
        }
    }
   
    
     //public function __destruct() {
        //Close any open connection nicely
        //global $dbh;
		//$dbh = null;
   // }

}
$dbh = new Dbh;