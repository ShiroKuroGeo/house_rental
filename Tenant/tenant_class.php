<?php
session_start();
ini_set('display_errors', 1);
class action{
	private $db;

    public function __construct() {
		ob_start();
        include '../db_connect.php';
        $this->db = $conn;
    }

    function __destruct() {
        $this->db->close();
        ob_end_flush();
    }

    function login(){
        extract($_POST);		
        $qry = $this->db->query("SELECT * FROM tenants where tenantuser = '".$username."' and tenantpassword = '".$password."' ");
        if($qry->num_rows > 0){
            foreach ($qry->fetch_array() as $key => $value) {
                if($key != 'passwors' && !is_numeric($key))
                    $_SESSION['login_'.$key] = $value;
            }
            return 1;
        }else{
            return 3;
        }
    }

	function logout(){
		session_destroy();
		foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
		header("location: tenantlogin.php");
	}

}
?>