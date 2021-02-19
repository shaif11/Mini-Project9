<?php
class Contact{
     private $host="localhost";
	 private $user="root";
	 private $pass="";
	 private $db="miniproject";
	 public $mysqli;
	 public function __construct(){
	      return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
	 }
	 public function contact_us($data){
		 $Name=$data['name'];
		 $Email=$data['email'];
		 $Subject=$data['subject'];
		 $Message=$data['message'];
		 $q = "insert into contact_us set name='$Name', email='$Email', subject='$Subject', message='$Message'";
		 return $this->mysqli->query($q);
	 }
}
?>